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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource("tasks","TaskController"); // Add this line in routes.php
Route::resource("entries","EntryController"); // Add this line in routes.php
Route::resource('users', 'UserController'); // for User CRUD
Route::get('tasks/{id}/copy', 'TaskController@copy')->name('tasks.copy');
Route::get('total', 'TaskController@total')->name('tasks.total');

