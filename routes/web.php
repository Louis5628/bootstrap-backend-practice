<?php

use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', 'FrontController@product');


Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {


    Route::get('/', 'HomeController@index')->name('home');

    Route::prefix('user')->group(function () {
        Route::get('/', 'UserController@index');
        Route::get('/create', 'UserController@create');
        Route::post('/store', 'UserController@store');
        Route::get('/edit/{id}', 'UserController@edit');
        Route::post('/update/{id}', 'UserController@update');
        Route::delete('/delete/{id}', 'UserController@delete');
    });


    Route::prefix('product')->group(function () {

        Route::prefix('type')->group(function () {
            Route::get('/', 'ProductTypeController@index');
            Route::get('/add', 'ProductTypeController@add');
            Route::post('/store', 'ProductTypeController@store');
            Route::get('/edit/{id}', 'ProductTypeController@edit');
            Route::post('/update/{id}', 'ProductTypeController@update');
            Route::delete('/delete/{id}', 'ProductTypeController@delete');
        });

        Route::prefix('item')->group(function(){
            Route::get('/', 'ProductController@index');
            Route::get('/add', 'ProductController@add');
            Route::post('/store', 'ProductController@store');
            Route::get('/edit/{id}', 'ProductController@edit');
            Route::post('/update/{id}', 'ProductController@update');
            Route::delete('/delete/{id}', 'ProductController@delete');
            Route::post('/deleteImage', 'ProductController@deleteImage');
        });

    });
});


Route::get('/member', function () {
    return view('front.member');
});

Route::get('/cart-1', function () {
    return view('front.cart-1');
});

Route::get('/cart-2', function () {
    return view('front.cart-2');
});

Route::get('/cart-3', function () {
    return view('front.cart-3');
});

Route::get('/cart-4', function () {
    return view('front.cart-4');
});

Route::get('/template', function () {
    return view('layouts.template');
});

Route::get('/cart-template', function () {
    return view('layouts.shoppingcart-template');
});


// Auth::routes();

// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');
