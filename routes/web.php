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

Route::get('/', function () {
    return view('index');
})->name('trangchu');

Route::get('danh-muc/{slug}',['as'=>'danhmuc','uses'=>'DanhmucController@getDanhmuc']);
Route::get('bai-viet/{danhmuc}/{slug}',['as'=>'baiviet','uses'=>'DanhmucController@getBaiviet']);
Route::get('lien-he',['uses'=>'DanhmucController@getLienhe'])->name('lienhe');
Route::get('gioi-thieu',['uses'=>'DanhmucController@getGioithieu'])->name('gioithieu');
Route::post('lien-he',['uses'=>'DanhmucController@lienhe'])->name('lienhep');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
