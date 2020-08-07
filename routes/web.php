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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'admin'], function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index');

    // Admin
    Route::resource('admin', 'AdminController');

    // Anggota
    Route::resource('member', 'MemberController');

    // Anggote Gallery
    Route::get('member-img/{slug}', 'MemberImgController@show');
    Route::get('member-img/create/{slug}', 'MemberImgController@create');
    Route::post('member-img/{slug}', 'MemberImgController@store');
    Route::get('member-img/{slug}/edit', 'MemberImgController@edit');
    Route::put('member-img/{id}', 'MemberImgController@update');
    Route::delete('member-img/{id}', 'MemberImgController@destroy');

    // Produk Kategori
    Route::resource('product-category', 'ProductCategoryController');

    // Produk
    Route::resource('product', 'ProductController');

    // Produk Popular
    Route::get('/product/{slug}/popular', 'ProductController@popular');
    Route::get('/product/{slug}/no-popular', 'ProductController@nopopular');

    // Product Gallery
    Route::get('product-img/{slug}', 'ProductImgController@show');
    Route::get('product-img/create/{slug}', 'ProductImgController@create');
    Route::post('product-img/{slug}', 'ProductImgController@store');
    Route::get('product-img/{slug}/edit', 'ProductImgController@edit');
    Route::put('product-img/{id}', 'ProductImgController@update');
    Route::delete('product-img/{id}', 'ProductImgController@destroy');

    // Kegiatan
    Route::resource('activity', 'ActivityController');

    // Koment Kegiatan
    Route::get('comment-activity', 'CommentActivityController@index');
    Route::get('comment-activity/{id}/edit', 'CommentActivityController@edit');
    Route::put('comment-activity/{id}', 'CommentActivityController@update');
    Route::delete('comment-activity/{id}', 'CommentActivityController@destroy');

    // Blog
    Route::resource('blog', 'BlogController');

    // Koment Blog
    Route::get('comment-blog', 'CommentBlogController@index');
    Route::get('comment-blog/{id}/edit', 'CommentBlogController@edit');
    Route::put('comment-blog/{id}', 'CommentBlogController@update');
    Route::delete('comment-blog/{id}', 'CommentBlogController@destroy');
});

// Auth Routes...
// Route::get('/login', function () {
//     return abort('404');
// });
Route::get('mattama', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('mattama', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
