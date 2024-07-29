<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\SubCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.pages.subCategory.index',[
            'subCategories' => SubCategory::latest()->paginate(),
            'categories' => Category::orderBy('category_name', 'asc')->get(),
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
    public function store(Request $request)
    {
        $request->validate([
            'sub_category_name' => 'required|unique:sub_categories',
            'category_id' => 'required'
        ],[
            'category_id.required' => 'Please select a category'
        ]);

        SubCategory::insert([
            'sub_category_name' => $request->sub_category_name,
            'category_id' => $request->category_id,
            'created_at' => Carbon::now()
        ]);

        return back()->with('success', 'Product sub category created successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $single_sub_cat = SubCategory::find($id);
        return view('admin.pages.subCategory.show', compact('single_sub_cat'));
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
    public function update(Request $request, string $id)
    {
        $request->validate([
            'sub_category_update_name' => 'required'
        ],[
            'sub_category_update_name.required' => 'The sub category name field is required'
        ]);

        SubCategory::find($id)->update([
            'sub_category_name' => $request->sub_category_update_name,
            'category_id' => $request->update_category_id
        ]);

        return back()->with('update_success', 'Product sub category updated successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // custom method

    public function single_sub_cat_delete(Request $request)
    {
        $sub_cat_del = SubCategory::findOrFail($request->single_delete);
        $sub_cat_del->delete();
        return response()->json([
            'status' => 'success',
            'tr' => 'tr_'.$request->single_delete,
        ]);
    }
}
