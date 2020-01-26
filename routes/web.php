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

Route::get('/', 'Front\HomeController@show')->name('home');
Route::get('/register', 'Front\AuthController@registerShow')->name('registerShow');
Route::get('/login', 'Front\AuthController@loginShow')->name('loginShow');
Route::put('/register', 'Front\AuthController@register')->name('register');
Route::put('/login', 'Front\AuthController@login')->name('login');
Route::post('/logout', 'Front\AuthController@logout')->name('logout');
Route::prefix('admin')->name('admin.')->middleware(['auth'])->group(function () {

});