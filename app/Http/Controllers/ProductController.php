<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductCreateRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
    public function store(ProductCreateRequest $request)
    {
        $image = $request->file('product_photo');
        $imageName = $request->product_slug.'-'.uniqid().'-'.time().'.'.$image->getClientOriginalExtension();
        $location = public_path('uploads/product_photoes/');
        $image->move($location, $imageName);

        Product::create([
            'product_name' => $request->product_name,
            'product_slug' => $request->product_slug,
            'category_id' => $request->category_id,
            'sub_category_id' => $request->sub_category_id,
            'product_price' => $request->product_price,
            'product_short_description' => $request->product_short_description,
            'product_long_description' => $request->product_long_description,
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
        return $request;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }

    // Custom methods

    public function productSubCategorySearch(Request $request)
    {
        $data['subCategories'] = SubCategory::where('category_id', $request->product_category_id)->get(['id', 'sub_category_name']);
        return response()->json($data);
    }
}
