<?php

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
/*

Route::get('/user/{id}', function ($id) {
    return 'hello '.$id;
});


Route::get('/about', function () {
    return view('pages.about');
});

*/

use App\Http\Controllers\shop\ShopController;

Route::get('/', 'PagesController@index');


Route::get('/about', 'PagesController@about');

Route::get('/services', 'PagesController@services');

Route::resource('posts', 'PostController');
Route::resource('shop', 'Shop\ShopController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::get('login/google', 'Auth\LoginController@redirectToProvider');
Route::get('login/google/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('/add-to-cart/{id}','Shop\ShopController@getAddToCart')->name('product.addToCart');
Route::get('/shoping-cart','Shop\ShopController@getCart')->name('product.shopingCart');