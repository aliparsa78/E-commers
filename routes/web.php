<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CatagoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\Frontend\WishlistController;
use App\Http\Controllers\Admin\OrderAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[FrontController::class,'index']);

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/catagory',[FrontController::class,'catagory']);
Route::get('/view-catagory/{id}',[FrontController::class,'view_catagory']);
Route::get('/product/{id}',[FrontController::class,'product_view']);


Route::middleware(['auth'])->group(function(){
    Route::post('/add-to-cart',[CartController::class,'addtocart']);
    Route::get('/mycart',[CartController::class,'mycart']);
    Route::get('/edite-cart/{id}',[CartController::class,'edite']);
    Route::post('/update-cart/{id}',[CartController::class,'update_cart']);
    Route::get('/delete-cart/{id}',[CartController::class,'delete_cart']);
// CheckOut Rout
    Route::get('checkout',[CheckoutController::class,'index']);
    Route::post('/place-order',[CheckoutController::class,'place_order']);
// My order rout
    Route::get('/my-order',[OrderController::class,'index']);
    Route::get('/view-order/{id}',[OrderController::class,'view_order']);
    Route::get('/wishlist',[WishlistController::class,'index']);
    Route::get('/add-to-wishlist/{id}',[WishlistController::class,'add']);
    Route::get('/delete-wish/{id}',[WishlistController::class,'delete']);
});

Route::group(['middleware'=>['auth','Admin']],function(){
    Route::get('/dashboard',[FrontendController::class,'index']);
    
    Route::get('catagories',[CatagoriesController::class,'index']);
    Route::get('add-catagory',[CatagoriesController::class,'add']);
    Route::post('/insert-catagory',[CatagoriesController::class,'insert']);
    Route::get('edite-catagory/{id}',[CatagoriesController::class,'edite']);
    Route::post('update-catagory/{id}',[CatagoriesController::class,'update']);
    Route::get('delete-catagory/{id}',[CatagoriesController::class,'delete']);
    
    Route::get('/products',[ProductController::class,'index']);
    Route::get('/add-products',[ProductController::class,'add']);
    Route::post('/insert-product',[ProductController::class,'insert']);
    Route::get('/edite-product/{id}',[ProductController::class,'edite']);
    Route::post('/update-product/{id}',[ProductController::class,'update']);
    Route::get('/delete-product/{id}',[ProductController::class,'delete']);
    Route::get('/orders',[OrderAdminController::class,'index']);
    Route::get('/admin-view-order/{id}',[OrderAdminController::class,'view']);
    Route::post('/update-order/{id}',[OrderAdminController::class,'update']);
    Route::get('/users',[DashboardController::class,'index']);
    Route::get('/user-view/{id}',[DashboardController::class,'view']);
});