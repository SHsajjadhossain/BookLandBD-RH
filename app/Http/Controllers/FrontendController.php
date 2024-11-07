<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Category;
use App\Models\CategorySectionOne;
use App\Models\CategorySectionTwo;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\Wishlist;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $cat_section_one_id = CategorySectionOne::where('status', 1)->first()->category_id;
        $cat_section_two_id = CategorySectionTwo::where('status', 1)->first()->category_id;
        return view('frontend.pages.home',[
            'categories' => Category::all(),
            'banners' => Banner::all(),
            'all_products' => Product::OrderBy('id', 'asc')->get(),
            'new_products' => Product::latest()->limit('20')->get(),
            'featured_products' => Product::where('product_featured', 1)->limit('20')->get(),
            'cat_section_one_title' => Category::find($cat_section_one_id)->category_name,
            'cat_section_two_title' => Category::find($cat_section_two_id)->category_name,
            'cat_section_one_products' => Product::where('category_id', $cat_section_one_id)->get(),
            'cat_section_two_products' => Product::where('category_id', $cat_section_two_id)->get(),
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

    public function allCategories()
    {
        return view('frontend.pages.allCategory',[
            'all_categories' => Category::paginate()
        ]);
    }

    public function shop()
    {
        return view('frontend.pages.shop',[
            'all_products' => Product::paginate()
        ]);
    }

    public function productSearchAutocomplete(Request $request){
        $query = $request->term;
        $products = Product::where('product_name', 'Like', '%'.$query.'%')->get();

        $data = [];

        foreach ($products as $items) {
            $data [] = [
                'value' => $items->product_name,
                'id' => $items->id,
            ];
        }

        if (count($data)) {
            return $data;
        } else {
            return ['value' => 'No Result Found', 'id' => ''];
        }

    }

    public function productSearch(Request $request){
        $search_product_name = $request->search_product;
        $search_products = Product::where('product_name', 'Like', '%'.$request->search_product.'%')->paginate();
        return view('frontend.pages.search_product', compact('search_products', 'search_product_name'));
    }

    public function contact()
    {
        return view('frontend.pages.contact');
    }
}
