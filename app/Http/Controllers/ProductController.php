<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.product.index',[
            'products' => Product::orderBy('created_at', 'desc')->paginate(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.product.create',[
            'product_categories' => Category::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $has_sub_cat = SubCategory::where('category_id', $request->category_id)->count();
        $slug = Str::slug($request->product_name)."-".Str::random(5);
        // ProductCreateRequest
        if ($has_sub_cat)
        {
            $request->validate([
                'product_name' => 'required',
                'category_id' => 'required',
                'sub_category_id' => 'required',
                'product_price' => 'required',
                'product_short_description' => 'required',
                'product_long_description' => 'required',
                'product_quantity' => 'required',
                'product_code' => 'required',
                'product_photo' => 'required|image|mimes:png,jpg,jpeg|dimensions:width=700, height=700'
            ]);
        }
        else
        {
            $request->validate([
                'product_name' => 'required',
                'category_id' => 'required',
                'product_price' => 'required',
                'product_short_description' => 'required',
                'product_long_description' => 'required',
                'product_quantity' => 'required',
                'product_code' => 'required',
                'product_photo' => 'required|image|mimes:png,jpg,jpeg|dimensions:width=700, height=700'
            ]);
        }

        $image = $request->file('product_photo');
        $imageName = $request->product_slug.'-'.uniqid().'-'.time().'.'.$image->getClientOriginalExtension();
        $location = public_path('uploads/product_photoes/');
        $image->move($location, $imageName);

        Product::create([
            'product_name' => $request->product_name,
            'product_slug' => $slug,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'product_price' => $request->product_price,
            'product_short_description' => $request->product_short_description,
            'product_long_description' => $request->product_long_description,
            'product_quantity' => $request->product_quantity,
            'product_code' => $request->product_code,
            'product_photo' => $imageName,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', 'Product created successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('admin.pages.product.show',[
            'single_product' => Product::find($product->id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.pages.product.edit',[
            'product' => Product::find($product->id),
            'product_categories' => Category::all(),
            'subCategories' => SubCategory::where('category_id', $product->category_id)->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        if ($request->hasFile('product_photo')) {
            $image = $request->file('product_photo');
            $imageName = uniqid() . time() .'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/product_photoes/');
            // delete old photo
            if (file_exists($location)) {
                @unlink($location.Product::find($product->id)->product_photo);
            }
            $image->move($location, $imageName);
            Product::find($product->id)->update([
                'product_photo' => $imageName,
            ]);
        }

        Product::find($product->id)->update([
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'product_price' => $request->product_price,
            'product_short_description' => $request->product_short_description,
            'product_long_description' => $request->product_long_description,
            'product_quantity' => $request->product_quantity,
            'product_code' => $request->product_code,
        ]);

        return redirect(route('product.index'))->with('product_update_success', 'Product updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $location = public_path('uploads/product_photoes/');
        $product_del = Product::findOrFail($product->id);
        @unlink($location.$product_del->product_photo);
        $product_del->delete();
        return response()->json([
            'status' => 'success',
            'tr' => 'tr_'.$product->id,
        ]);
    }

    // Custom methods

    public function productSubCategorySearch(Request $request)
    {
        $data['subCategories'] = SubCategory::where('category_id', $request->product_category_id)->get(['id', 'sub_category_name']);
        return response()->json($data);
    }

    public function productDetails($slug){
        $wishlist_status = Wishlist::where('user_id', auth()->id())->where('product_id', Product::where('product_slug', $slug)->first()->id)->exists();
        if ($wishlist_status) {
            $wishlist_id = Wishlist::where('user_id', auth()->id())->where('product_id', Product::where('product_slug', $slug)->first()->id)->first()->id;
        }
        else {
            $wishlist_id = "";
        }
        $related_products = Product::where('product_slug', '!=', $slug)->where('category_id', Product::where('product_slug', $slug)->firstOrFail()->category_id)->get();
        return view('frontend.pages.productDetails',[
            'single_product_info' => Product::where('product_slug', $slug)->firstOrFail(),
            'related_products' => $related_products,
            'wishlist_status' => $wishlist_status,
            'wishlist_id' => $wishlist_id
        ]);
    }
}
