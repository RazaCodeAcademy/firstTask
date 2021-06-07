<?php

use Illuminate\Support\Facades\Route;
use PHPUnit\TextUI\XmlConfiguration\Group;

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

Route::prefix('products')->namespace('myTask')->group(function () {
    Route::get('/', 'ProductController@index')->name('products');
    Route::get('/show/{id}', 'ProductController@show')->name('showProduct');
    Route::get('/create', 'ProductController@create')->name('createProduct');
    Route::post('/store', 'ProductController@store')->name('storeProduct');
    Route::get('/edit/{id}', 'ProductController@edit')->name('editProduct');
    Route::put('//update/{id}', 'ProductController@update')->name('updateProduct');
    Route::get('/delete/{id}', 'ProductController@destroy')->name('deleteProduct');
});
