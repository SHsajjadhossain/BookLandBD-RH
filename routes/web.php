<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishlistController;
use Illuminate\Support\Facades\Route;

// all frontend views routes start

Route::get('/', [FrontendController::class, 'index'])->name('frontend.home');
Route::get('/shop', [FrontendController::class, 'shop'])->name('frontend.shop');

Route::get('/category/allCategories', [FrontendController::class, 'allCategories'])->name('category.allCategories');
Route::get('/catwise/{cat_id}/{random}', [FrontendController::class, 'catWiseProducts'])->name('catwiseproducts');
Route::get('/subcatwise/{sub_cat_id}/{random}', [FrontendController::class, 'subcatWiseProducts'])->name('subcatwiseproducts');
Route::get('/product/details/{slug}', [ProductController::class, 'productDetails'])->name('product.productDetails');
Route::get('/search/productAjax', [FrontendController::class, 'productSearchAutocomplete'])->name('searchProductAjax');
Route::get('/product/search', [FrontendController::class, 'productSearch'])->name('product.search');

// wishlist routes start

Route::resource('wishlist', WishlistController::class);
Route::get('/wishlist/insert/{product_id}', [WishlistController::class, 'insert'])->name('wishlist.insert');
Route::get('/wishlist/remove/{wishlist_id}', [WishlistController::class, 'remove'])->name('wishlist.remove');

// wishlist routes end

// cart routes start

Route::get('wishlist/cart/{wishlist_id}', [CartController::class, 'wishlistCart'])->name('wishlist.cart');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::post('/add/to/cart/{product_id}', [CartController::class, 'addToCart'])->name('addToCart');
Route::get('/cart/remove/{id}', [CartController::class, 'cartRemove'])->name('cart.remove');
Route::post('/cart/update', [CartController::class, 'cartUpdate'])->name('cart.update');
Route::get('/cart/clear/{user_id}', [CartController::class, 'cartClear'])->name('cart.clear');

// cart routes end

// coupon routes start
Route::resource('coupon', CouponController::class);
// coupon routes end

// all frontend views routes end

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'verified', 'rolechecker']], function(){
    Route::get('/dashboard',[AdminController::class, 'index'])->name('dashboard');
    Route::get('/my-profile', [AdminController::class, 'myProfile'])->name('my-profile');
    Route::post('/my-profile/update', [AdminController::class, 'myProfileUpdate'])->name('my-profile.update');
    Route::post('/my-profile/update/password', [AdminController::class, 'myProfileUpdatePassword'])->name('my-profile.update.password');

    // category all routes start
    Route::resource('category', CategoryController::class);
    Route::post('/category/single/cat/delete', [CategoryController::class, 'single_cat_delete'])->name('category.single_cat_delete');
    // category all routes end

    // subCategory all routes start
    Route::resource('subcategory',SubCategoryController::class);
    Route::post('/subcategory/single/subcat/delete', [SubCategoryController::class, 'single_sub_cat_delete'])->name('subcategory.single_sub_cat_delete');
    // subCategory all routes end

    // product all routes start
    Route::resource('product', ProductController::class);
    // product all routes end

    // product wise subcategory search route start
    Route::post('product/subCategory/search', [ProductController::class, 'productSubCategorySearch'])->name('product.subCategory.search');
    // product wise subcategory search route end
});

Route::middleware('auth', 'verified')->group(function () {
    Route::get('user/dashboard', [UserController::class, 'index'])->name('user.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
