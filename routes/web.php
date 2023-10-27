<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ColorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductImageController;
use App\Http\Controllers\ProductReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SizeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WebsiteInfoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    //SHOP PAGE
    Route::get('/e_shopper', [IndexController::class, 'index'])->name('index');
    //

    //SHOP PAGE
        Route::get('/shop', [ShopController::class, 'index'])->name('shop');
    //

    //CART PAGE
        Route::get('/cart', [CartController::class, 'index'])->name('cart');
    //

    //CHECK OUT PAGE
        Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
    //

    //CONTACT US PAGE
        Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');
    //

Route::get('/e_shopper_dash', function () {
    return view('eshopper_dash.index');
})->middleware(['auth', 'verified'])->name('dashboard');

    //Users
        Route::resource('Users', UserController::class)->middleware(['auth', 'verified']);
    //

    //website_infos
        Route::resource('website_infos', WebsiteInfoController::class)->middleware(['auth', 'verified']);
    //

    //sliders
        Route::resource('sliders', SliderController::class)->middleware(['auth', 'verified']);
    //

    //Categories
        Route::resource('Categories', CategorieController::class)->middleware(['auth', 'verified']);
    //

    //Products
        Route::resource('Products', ProductController::class)->middleware(['auth', 'verified']);
    //

    //Colors
        Route::resource('colors', ColorController::class)->middleware(['auth', 'verified']);
    //

    // Size
        Route::resource('sizes', SizeController::class)->middleware(['auth', 'verified']);
    //

    //productReview
        Route::resource('productReview', ProductReviewController::class)->middleware(['auth', 'verified']);
    //

    //productImage
        Route::resource('productImage', ProductImageController::class)->middleware(['auth', 'verified']);
    //
    //productImage
    Route::resource('Contact', ContactController::class)->middleware(['auth', 'verified']);
    //

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
