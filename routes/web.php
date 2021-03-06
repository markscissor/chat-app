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

// Route::get('/', function () {
//     broadcast(new WebsocketDemoEvent('some data'));

//     return view('welcome');
// });

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/chats', 'App\Http\Controllers\ChatsController@index');

Auth::routes();

Route::get('/messages', 'App\Http\Controllers\ChatsController@fetchMessages');
Route::post('/messages', 'App\Http\Controllers\ChatsController@sendMessage');

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
