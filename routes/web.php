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
//     return view('categoryTreeview');
// });

Route::get('/','CategoryController@manageCategory')->name('category-tree-view');
Route::post('/','CategoryController@addCategory')->name('add.category');
