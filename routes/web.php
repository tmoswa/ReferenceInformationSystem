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
    return view('auth/login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/upload_content', 'HomeController@upload_content')->name('upload_content');
Route::get('/viewdoc/{id}', 'HomeController@viewdoc')->name('viewdoc');
Route::post('/take_notes', 'HomeController@take_notes')->name('take_notes');




