<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryCreateRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.category.index',[
            'categories' => Category::orderBy('id', 'desc')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryCreateRequest $request)
    {
        $image = $request->file('category_photo');
        $imageName = uniqid() . time() .'.'.$image->getClientOriginalExtension();
        $location = public_path('uploads/category_photoes/');
        $image->move($location, $imageName);

        Category::create([
            'category_name' => $request->category_name,
            'category_photo' => $imageName,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', 'Product category created successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.pages.category.show',[
            'single_cat' => Category::find($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CategoryUpdateRequest $request, string $id)
    {
        if ($request->hasFile('category_update_photo')) {
            $image = $request->file('category_update_photo');
            $imageName = uniqid() . time() .'.'.$image->getClientOriginalExtension();
            $location = public_path('uploads/category_photoes/');
            // delete old photo
            if (file_exists($location)) {
                @unlink($location.Category::find($id)->category_photo);
            }
            $image->move($location, $imageName);
        }

        Category::find($id)->update([
            'category_name' => $request->category_update_name,
            'category_photo' => $imageName
        ]);

        return back()->with('imgUpdateSuccess', 'Category photo updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // Custom methods

    public function single_cat_delete(Request $request){
        $location = public_path('uploads/category_photoes/');
        $cat_del = Category::findOrFail($request->single_delete);
        @unlink($location.$cat_del->category_photo);
        $cat_del->delete();
        return response()->json([
            'status' => 'success',
            'tr' => 'tr_'.$request->single_delete,
        ]);
    }

    // public function cat_mass_delete(Request $request){
    //     echo "Here I'm";
    //     $categories = Category::findMany($request->ids);
    //     foreach ($categories as $category) {
    //         if ($category->getBlogs->count() > 0) {
    //             return response()->json(['error' => 'Category Attach with blog.']);
    //         }
    //     }
    //     $categories->each->delete();
    //     return response()->json(['success' => 'done']);
    // }
}
