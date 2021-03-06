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

Route::get('/', 'Collectionscontroller@collections')->name('home');

Route::get('/store','Storecontroller@collections')->name('store');
Route::get('/relations/{id}', 'Storecontroller@index')->name('userproducts');