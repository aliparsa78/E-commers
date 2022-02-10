<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FrontendController;
use App\Http\Controllers\Admin\CatagoriesController;
use App\Http\Controllers\Admin\ProductController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

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