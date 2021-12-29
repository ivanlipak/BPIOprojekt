<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'dashboard'])->name('dashboard');
//Route::get('/', 'App\\Http\\Controllers\\HomeController@dashboard')->name('dashboard');



//indexi
Route::get('/cart_item', 'App\\Http\\Controllers\\CartItemController@index')->name('cart_item.index');
Route::get('/inventory', 'App\\Http\\Controllers\\InventoryController@index')->name('inventory.index');
Route::get('/order_detail', 'App\\Http\\Controllers\\OrderDetailController@index')->name('order_detail.index');
Route::get('/order_item', 'App\\Http\\Controllers\\OrderItemController@index')->name('order_item.index');
Route::get('/payment_detail', 'App\\Http\\Controllers\\PaymentDetailController@index')->name('payment_detail.index');
Route::get('/product_category', 'App\\Http\\Controllers\\ProductCategoryController@index')->name('product_category.index');
Route::get('/product', 'App\\Http\\Controllers\\ProductController@index')->name('product.index');
Route::get('/shopping_session', 'App\\Http\\Controllers\\ShoppingSessionController@index')->name('shopping_session.index');
Route::get('/user_address', 'App\\Http\\Controllers\\UserAddressController@index')->name('user_address.index');
Route::get('/user_payment', 'App\\Http\\Controllers\\UserPaymentController@index')->name('user_payment.index');
Route::get('/user', 'App\\Http\\Controllers\\UserController@index')->name('user.index');

//storeovi
Route::post('/cart_item', 'App\\Http\\Controllers\\CartItemControlle@store');
Route::post('/inventory', 'App\\Http\\Controllers\\InventoryController@store');
Route::post('/order_detail', 'App\\Http\\Controllers\\OrderDetailController@store');
Route::post('/order_item', 'App\\Http\\Controllers\\OrderItemController@store');
Route::post('/payment_detail', 'App\\Http\\Controllers\\PaymentDetailController@store');
Route::post('/product_category', 'App\\Http\\Controllers\\ProductCategoryController@store');
Route::post('/product', 'App\\Http\\Controllers\\ProductController@store');
Route::post('/shopping_session', 'App\\Http\\Controllers\\ShoppingSessionController@store');
Route::post('/user_address', 'App\\Http\\Controllers\\UserAddressController@store');
Route::post('/user_payment', 'App\\Http\\Controllers\\UserPaymentController@store');
Route::post('/user', 'App\\Http\\Controllers\\UserController@store');