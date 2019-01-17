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

Route::get('/', 'DefaultController@index')->name('home');

// Route::get('/auth', function () {
//     return view('auth.login');
// });


// Route::post('supplier/add', 'Supplier\SupplierController@store')->name('supplier.add');

Route::get('/company', function () {
    return view('profile.index');
});
Route::get('/company/video', function () {
    return view('profile.video');
});
Route::get('/company/profile', function () {
    return view('profile.profile');
});
Route::get('/company/product', function () {
    return view('profile.product');
});
Route::get('/company/photos', function () {
    return view('profile.photos');
});
Route::get('/company/contact', function () {
    return view('profile.contact');
});
Route::get('/category/{category_id}', 'DefaultController@category')->name('category')->where('category_id', '[0-9]+');
Route::get('/category/{category_id}/{sub_category_id}', 'DefaultController@subCategory')->where(['category_id' => '[0-9]+', 'category_id' => '[0-9]+']);
Route::get('/premium-signup', 'DefaultController@premiumSignUp')->name('package');
Route::get('register/{package_id}', 'Auth\RegisterController@showRegistrationForm')->name('register')->where('package_id', '[0-9]+');
// Route::get('/premium-signup/payment/','DefaultController@payment')->name('payment')->middleware('auth');
Route::get('/premium-signup/payment/','DefaultController@payment')->name('payment');
Route::get('/livesearch','DefaultController@result');

Auth::routes();

// Admin Route Start
Route::get('/dashboard', 'HomeController@index')->name('dashboard');
Route::resource('/dashboard/category', 'Admin\CategoryController', ['as'=>'admin']);
Route::resource('/dashboard/subcategory', 'Admin\SubCategoryController', ['as'=>'admin']);
Route::resource('/dashboard/btype', 'Admin\BusinessTypeController', ['as'=>'admin']);
Route::resource('/dashboard/sbtype', 'Admin\SupplierBtypeController', ['as'=>'admin']);
Route::resource('/dashboard/profile', 'Admin\SupplierProfileController', ['as'=>'admin']);
Route::resource('/dashboard/product', 'Admin\SupplierProductController', ['as'=>'admin']);
Route::resource('/dashboard/request', 'Admin\BuyerPostController', ['as'=>'admin']);
