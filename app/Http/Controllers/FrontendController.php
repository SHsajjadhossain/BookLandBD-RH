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
           'single_cat' => Category::find($cat_id),
           'catwise_products' => Product::where('category_id', $cat_id)->paginate()
        ]);
    }

    public function subcatWiseProducts($sub_cat_id)
    {
        $cat_id = SubCategory::find($sub_cat_id)->category_id;
        return view('frontend.pages.subCatWiseProducts',[
            'single_sub_cat' => SubCategory::find($sub_cat_id),
            'cat_info' => Category::find($cat_id),
            'sub_catwise_products' => Product::where('sub_category_id', $sub_cat_id)->OrderBy('id', 'desc')->paginate(),
        ]);
    }

    public function allCategories() {
        return view('frontend.pages.allCategory',[
            'all_categories' => Category::paginate()
        ]);
    }

    public function shop() {
        return view('frontend.pages.shop',[
            'all_products' => Product::paginate()
        ]);
    }
}
