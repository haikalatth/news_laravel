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
Route::get('news_data', 'newsController@index');
Route::get('news_data/publish/{id}','newsController@edit');
Route::get('news_data/delete/{id}','newsController@destroy');
Route::get('news_data/login', 'loginController@index');
Route::post('news_data/loginn', 'loginController@auth');


