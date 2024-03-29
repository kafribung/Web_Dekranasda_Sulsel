<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// -----------------------------------------------------------ADMIN
Route::group(['middleware' => 'admin'], function () {
    // Dashboard
    Route::get('dashboard', 'DashboardController@index');
    // Admin
    Route::resource('admin', 'AdminController');
    // Anggota
    Route::resource('member', 'MemberController');
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

// -----------------------------------------------------------USER
// Home
Route::get('/', 'Pages\HomeController@index');
// Anggota
Route::get('anggota', 'Pages\AnggotaController@index');
Route::get('anggota/{member:slug}', 'Pages\AnggotaController@show');
// Produk
Route::get('produk', 'Pages\ProdukController@index');
Route::get('produk/{slug}', 'Pages\ProdukController@show');
// Kegiatan
Route::get('kegiatan', 'Pages\KegiatanController@index');
Route::get('kegiatan/{activity:slug}', 'Pages\KegiatanController@show');
Route::post('kegiatan/komentar/{id}', 'Pages\KegiatanController@store');
// Blog
Route::get('blogs', 'Pages\BlogsController@index');
Route::get('blogs/{blog:slug}', 'Pages\BlogsController@show');
Route::post('blogs/komentar/{id}', 'Pages\BlogsController@store');
// Tentang
Route::get('tentang', 'Pages\TentangController@index');
// Kontak
Route::get('kontak', 'Pages\KontakController@index');
// Search
Route::get('seacrh', 'Pages\SearchController@index');
// Registrasi
Route::get('registrasi', 'Pages\RegistrasiController@index');
Route::get('registrasi/donwload', 'Pages\RegistrasiController@donwload');


// Auth Routes...
Route::get('mattama', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('mattama', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes();
