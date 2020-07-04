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




});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
