<?php

use Illuminate\Support\Facades\Route;

//HOME
Route::get('/', 'App\Http\Controllers\HomepageController@index')->name('home.index');
Route::get('/product_show', 'App\Http\Controllers\HomepageController@show')->name('home.show');
Route::get('/product_checkout', 'App\Http\Controllers\HomepageController@checkout')->name('home.checkout');
Route::get('/product_detail/{id}', 'App\Http\Controllers\HomepageController@detail')->name('home.detail');
Route::post('/search', 'App\Http\Controllers\HomepageController@search')->name('search');
Route::post('/productlist/{search}', 'App\Http\Controllers\HomepageController@productlist')->name('productlist');

//ADMİN
Route::prefix('admin')->name('admin.')->middleware('isLogin')->group(function(){
Route::get('/login', 'App\Http\Controllers\Admin\HomeController@login')->name('login');
Route::post('/logincheck', 'App\Http\Controllers\Admin\HomeController@logincheck')->name('logincheck');
});
Route::prefix('admin')->name('admin.')->middleware('isAdmin')->group(function(){
Route::get('/', 'App\Http\Controllers\Admin\HomeController@index')->name('index');
Route::get('/logout', 'App\Http\Controllers\Admin\HomeController@logout')->name('logout');
//SETTİNG
Route::get('setting', 'App\Http\Controllers\Admin\SettingController@index')->name('setting.index');
Route::post('setting/update/{id}', 'App\Http\Controllers\Admin\SettingController@update')->name('setting.update');
});

//CATEGORY
Route::prefix('category')->name('category.')->middleware('isAdmin')->group(function(){
Route::resource('/', 'App\Http\Controllers\Admin\CategoryController');
Route::get('/edit/{id}', 'App\Http\Controllers\Admin\CategoryController@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\Admin\CategoryController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\Admin\CategoryController@destroy')->name('delete');
});

//Product
Route::prefix('product')->name('product.')->middleware('isAdmin')->group(function(){
Route::get('/index', 'App\Http\Controllers\Admin\ProductController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\Admin\ProductController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\Admin\ProductController@store')->name('store');
Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ProductController@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\Admin\ProductController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\Admin\ProductController@destroy')->name('delete');
});

//IMAGE
Route::prefix('image')->name('image.')->middleware('isLogin')->group(function(){
Route::get('/create/{product_id}', 'App\Http\Controllers\Admin\ImageController@create')->name('create');
Route::post('/store/{product_id}', 'App\Http\Controllers\Admin\ImageController@store')->name('store');
Route::get('/edit/{id}', 'App\Http\Controllers\Admin\ImageController@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\Admin\ImageController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\Admin\ImageController@destroy')->name('delete');
});

//SHOP-CART
Route::group(["middleware"=>"auth"], function (){
Route::get('/shopcart', 'App\Http\Controllers\ShopcartController@index')->name('shopcart.index');
Route::post('shopcart/store/{id}', 'App\Http\Controllers\ShopcartController@store')->name('shopcart.store');
Route::post('shopcart/update/{id}', 'App\Http\Controllers\ShopcartController@update')->name('shopcart.update');
Route::get('shopcart/delete/{id}', 'App\Http\Controllers\ShopcartController@destroy')->name('shopcart.delete');
});


//USERS
Route::prefix('users')->name('user.')->group(function(){
Route::get('/index', 'App\Http\Controllers\Admin\UserController@index')->name('index');
Route::get('/create', 'App\Http\Controllers\Admin\UserController@create')->name('create');
Route::post('/store', 'App\Http\Controllers\Admin\UserController@store')->name('store');
Route::get('/edit/{id}', 'App\Http\Controllers\Admin\UserController@edit')->name('edit');
Route::post('/update/{id}', 'App\Http\Controllers\Admin\UserController@update')->name('update');
Route::get('/delete/{id}', 'App\Http\Controllers\Admin\UserController@destroy')->name('delete');
Route::get('/{user}/form-password', 'App\Http\Controllers\Admin\UserController@passwordForm')->name('password');
Route::post('/{user}/change-password', 'App\Http\Controllers\Admin\UserController@changePassword')->name('passwordChange');
});

//HOME-USERS
Route::prefix('home')->name('home.')->group(function(){
Route::get('users/index', 'App\Http\Controllers\AuthController@index')->name('user.index');
Route::post('signin', 'App\Http\Controllers\AuthController@signin')->name('signin');
Route::post('signup', 'App\Http\Controllers\AuthController@signup')->name('signup');
Route::get('login', 'App\Http\Controllers\AuthController@login')->name('user.login');
Route::get('register', 'App\Http\Controllers\AuthController@register')->name('user.register');
Route::get('logout', 'App\Http\Controllers\AuthController@logout')->name('user.logout');
});

//ADDRESS
Route::resource("/user/{user}/addresses",'App\Http\Controllers\AddressController');


