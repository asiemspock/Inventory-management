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

Route::get('/', function () {
    //return 'ashim shrestha';
    return view('welcome');
});


Route::get('/products', 'ProductController@index');
Route::get('/products/create', 'ProductController@create');
Route::get('/products/{id}', 'ProductController@show');
Route::post('/products', 'ProductController@store');
Route::get('/products/{id}/edit', 'ProductController@edit');
Route::put('/products/{id}','ProductController@update');
Route::delete('/products/{id}','ProductController@destroy');

Route::get('/users', 'UserController@index');
Route::get('/users/register', 'UserController@create');
Route::get('/users/{id}', 'UserController@show');
Route::post('/users', 'UserController@store');
Route::get('/users/{id}/edit', 'UserController@edit');
Route::put('/users/{id}', 'UserController@update');
Route::delete('/users/{id}', 'UserController@destroy');

Route::get('/category', 'CategoryController@index');
Route::get('/category/create', 'CategoryController@create');
Route::post('/category', 'CategoryController@store');
Route::get('/category/{id}/edit', 'CategoryController@edit');
Route::delete('/category/{id}', 'CategoryController@destroy');
Route::put('/category/{id}', 'CategoryController@update');

Route::get('/tags', 'TagController@index');
Route::get('/tags/create', 'TagController@create');
Route::get('/tags/{id}', 'TagController@show');
Route::post('/tags', 'TagController@store');
Route::get('/tags/{id}/edit', 'TagController@edit');
Route::put('/tags/{id}','TagController@update');
Route::delete('/tags/{id}','TagController@destroy');
Route::get('/tags/{id}filter', 'TagController@filter');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');