<?php

use App\Http\Middleware\BeforeHelloMiddleware;
use App\Http\Middleware\AfterHelloMiddleware;

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
Route::get('/hello/index', 'HelloController@index');
Route::get('/resource/index', 'ResourceController@index')->middleware(BeforeHelloMiddleware::class)->middleware(AfterHelloMiddleware::class);
Route::get('/resource/create', 'ResourceController@create');
Route::post('/resource/store', 'ResourceController@store');
Route::get('/resource/edit', 'ResourceController@edit');
Route::post('/resource/update', 'ResourceController@update');
Route::get('/resource/show', 'ResourceController@show');
Route::post('/resource/destroy', 'ResourceController@destroy');
