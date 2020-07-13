<?php

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
//all frontend route
Route::get('/', 'WelcomeController@index')->name('welcome');
Route::get('/about-us', 'WelcomeController@about_us')->name('about_us');
Route::get('/contact-us', 'WelcomeController@contact_us')->name('contact_us');
Route::get('/faq', 'WelcomeController@faq')->name('faq');
Route::get('/terms-and-condition', 'WelcomeController@terms_and_condition')->name('terms_and_condition');

Route::prefix('product')->group(function (){
    Route::get('/show','WelcomeController@all_products')->name('product.show'); // All Product
    Route::get('/single/details/{id}', 'WelcomeController@product_details')->name('product.show.details'); //product details
    Route::get('/{cat_id}', 'WelcomeController@show_product_by_category')->name('product.show.category');// show product by category
    Route::get('/{cat_id}/{sub_cat_id}', 'WelcomeController@show_product_by_subcategory')->name('product.show.subcategory');// show product by subcategory

});

Route::prefix('cart')->group(function(){
    Route::get('/add/{id}','CartController@add')->name('cart.add'); // All Product
    Route::get('/items','CartController@index')->name('cart.index'); // All Product

});




// all admin users route
Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'WelcomeController@admin')->name('admin');
Route::get('/admin/login', 'WelcomeController@showAdminlogin')->name('admin.login');


// superadmin Routes
Route::group(['as'=>'superadmin.','prefix'=>'superadmin','middleware'=>['superadmin','auth'],'namespace'=>'superadmin'],function() {
//    dashboard route
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
        // all catelog routes
    Route::group(['prefix' => 'catelog'], function () {
        Route::resource('product', 'ProductController');
        Route::resource('category', 'CategoryController');
        Route::resource('subcategory', 'SubCategoryController');
        Route::resource('manufacturer', 'ManufacturerController');

    });
//    review route
    Route::group(['prefix' => 'product'], function () {
        Route::resource('review', 'ReviewController');
    });

//    order route
    Route::group(['prefix' => 'order'], function () {
        Route::resource('order', 'OrderController');
    });

//    banner route
    Route::group(['prefix' => 'front'],function (){
       Route::resource('banner','BannerController');
    });

//    add new user route
    Route::group(['prefix' => 'auth'], function () {
        Route::resource('user', 'UserController');

    });

//    website setting and profile route
    Route::group(['prefix' => 'system'], function () {
        Route::resource('setting', 'SettingController');
        Route::resource('profile', 'ProfileController');
    });


});

// Admin Routes
Route::group(['as'=>'admin.','prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// Manager Routes
Route::group(['as'=>'manager.','prefix'=>'manager','middleware'=>['manager','auth'],'namespace'=>'manager'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});

// User Routes
Route::group(['as'=>'user.','prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function() {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');
});
