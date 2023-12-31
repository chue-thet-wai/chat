<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'App\Http\Controllers\HomeController@index');
Route::get('/load-latest-messages', 'App\Http\Controllers\MessagesController@getLoadLatestMessages');
Route::post('/send', 'App\Http\Controllers\MessagesController@postSendMessage');
Route::get('/fetch-old-messages', 'App\Http\Controllers\MessagesController@getOldMessages');
Auth::routes();