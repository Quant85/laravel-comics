<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Route::get('/', 'PageController@index')->name('homepage');
/* Route::get('about', 'PageController@about')->name('about');
Route::get('contacts', 'PageController@contacts')->name('contacts'); */

Auth::routes();

Route::resource('comics', 'ComicController');
//Route::get('/admin', 'Admin\HomeController@index')->name('admin');

Route::middleware('auth')->namespace('Admin')->prefix('admin')->name('admin.')->group(function () 
{
    Route::get('/', 'HomeController@index')->name('index');
    Route::resource('products', 'ProductController');//voglio che faccia riferimento ad /admin/products
    Route::resource('series', 'SerieController');
});