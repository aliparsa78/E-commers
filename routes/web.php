<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CatagoriesController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Frontend\FrontController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;

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
// Check out Rout
    Route::get('checkout',[CheckoutController::class,'index']);
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
});