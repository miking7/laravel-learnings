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
    return view('welcome');
});

Route::get('foo', function () {
    return 'Hello World';
});

Route::get('friend/{id}', function ($id) {
    return 'Friend with ID: '.$id;
})->where('id', '[0-9]+');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
