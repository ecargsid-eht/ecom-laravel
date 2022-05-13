<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CouponController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;



Route::get("/",[PublicController::class,"index"])->name("homepage");
Route::get("/single-view/{p_id}",[PublicController::class,"singleView"])->name("single_view");
Route::get("/cart",[PublicController::class,"cart"])->name("cart");
Route::get("/checkout",[PublicController::class,"checkOut"])->name("checkout");


Route::prefix("admin")->group(function(){
    Route::get("/",[AdminController::class,"dashboard"])->name("admin.dashboard");
    Route::resource("product",ProductController::class);
    Route::resource("category",CategoryController::class);
    Route::resource("brand",BrandController::class);
    Route::resource("coupon",CouponController::class);
    Route::resource("order",OrderController::class);
    Route::resource("payment",PaymentController::class);
    Route::resource("address",AddressController::class);
    Route::resource("user",UserController::class);
});

// --------------------------- AUTH CONTROLLER ------------------------------------------

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
