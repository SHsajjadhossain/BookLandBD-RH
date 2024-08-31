<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.pages.home', [
            'categories' => Category::all(),
        ]);
    }

    public function catWiseProducts($cat_id)
    {
        return view('frontend.pages.catWiseProducts',[
           'all_categories' => Category::limit('20')->get(),
           'catwise_products' => Product::where('category_id', $cat_id)->get()
        ]);
    }

    public function subcatWiseProducts($sub_cat_id)
    {
        $cat_id = SubCategory::find($sub_cat_id)->category_id;
        return view('frontend.pages.subCatWiseProducts',[
            'single_sub_cat' => SubCategory::find($sub_cat_id),
            'cat_info' => Category::find($cat_id),
            'sub_catwise_products' => Product::where('sub_category_id', $sub_cat_id)->paginate(),
        ]);
    }
}
