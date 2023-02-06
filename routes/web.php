<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front;
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
//      return view('front.index');
// });
Route::get('/',[Front\HomeController::class, 'index']);

Route::prefix('shop')->group(function(){
    Route::get('/product/{id}',[Front\ShopController::class, 'show']);
    Route::post('/product/{id}',[Front\ShopController::class, 'postComment']);
    Route::get('/',[Front\ShopController::class, 'index']);
    Route::get('/{categoryName}',[Front\ShopController::class, 'category']);
});

Route::prefix('cart')->group(function(){
    Route::get('add/{id}',[Front\CartController::class, 'add']);
    Route::get('/',[Front\CartController::class, 'index']);
    Route::get('delete/{rowId}',[Front\CartController::class, 'delete']);
    Route::get('/destroy',[Front\CartController::class, 'destroy']);
    Route::get('/update',[Front\CartController::class, 'update']);
});

Route::prefix('checkout')->group(function(){
    Route::get('/',[Front\CheckOutController::class, 'index']);
    Route::post('/',[Front\CheckOutController::class, 'addOrder']);
    Route::get('/result',[Front\CheckOutController::class,'result']);
});

Route::prefix('contact')->group(function(){
    Route::get('/',[Front\ContactController::class, 'index']);
});
Route::prefix('blog')->group(function(){
    Route::get('/',[Front\BlogController::class, 'index']);
});
Route::prefix('blog-detail')->group(function(){
    Route::get('/',[Front\BlogDetailController::class, 'index']);
});
Route::prefix('faq')->group(function(){
    Route::get('/',[Front\FAQController::class, 'index']);
});
Route::prefix('login')->group(function(){
    Route::get('/',[Front\LoginController::class, 'index']);
    Route::post('/',[Front\LoginController::class, 'checkLogin']);
    Route::get('/logout',[Front\LoginController::class, 'logout']);
});
Route::prefix('register')->group(function(){
    Route::get('/',[Front\RegisterController::class, 'index']);
    Route::post('/',[Front\RegisterController::class, 'register']);
});


Route::prefix('admin')->group(function(){
    Route::get('/',[Front\AdminController::class, 'login']);
    Route::post('/',[Front\AdminController::class, 'checkLogin']);
    Route::get('/dashboard',[Front\AdminController::class, 'dashboard']);
    Route::get('/user',[Front\AdminController::class, 'user']);
    Route::get('/category',[Front\AdminController::class, 'category']);
    Route::get('/product',[Front\AdminController::class, 'product']);
    Route::get('/order',[Front\AdminController::class, 'order']);
    
    Route::post('/category', [Front\AdminController::class, 'insert_category']);
    Route::get('/edit-category/{id}', [Front\AdminController::class, 'edit_category']);
    Route::post('/update-category/{id}', [Front\AdminController::class, 'update_category']);
    Route::get('/delete-category/{id}', [Front\AdminController::class, 'delete_category']);
    
    Route::post('/product', [Front\AdminController::class, 'insert_product']);
    Route::get('/edit-product/{id}', [Front\AdminController::class, 'edit_product']);
    Route::post('/update-product/{id}', [Front\AdminController::class, 'update_product']);
    Route::get('/delete-product/{id}', [Front\AdminController::class, 'delete_product']);

});