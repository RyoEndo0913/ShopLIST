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

// TOPページ
Route::get('/', function () {
    return view('top');
});

// 出店者一覧
Route::get('owners', 'OwnerController@index')->name('owners.index');

// 出店登録
Route::get('owners/create', 'OwnerController@create')->name('owners.create');