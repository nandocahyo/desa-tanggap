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

//route admin
Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin')->name("admin.login.post");
Route::get('admin/logout', 'Auth\AdminAuthController@postLogout')->name("admin.logout");

Auth::routes();

// Route untuk user
Route::group(["middleware" => "auth"], function() {
    Route::get('/home', 'HomeController@index')->name('user.home');
    Route::resource("reports", "ReportController", ["as" => "user"])->except(["show", "edit", "update", "destroy"]);
});
