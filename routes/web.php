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

Route::get('/', 'HomePageController@index');
Route::get('/contact', 'HomePageController@contact');
Route::post('/contact', 'HomePageController@postContact');
Route::get('/about', 'HomePageController@about');
Route::get('/projects', 'HomePageController@projects');

Auth::routes();
Route::resource('posts', 'PostsController');
Route::get('/home', 'HomeController@index')->name('home');
