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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/auth', function () {
    return view('auth');
});

Route::get('/category', function () {
    return view('category');
});
Route::get('/supplier', function () {
    return view('supplier');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
