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

Route::post('employes/{id}/restore','EmployeController@restore');
Route::get('employes/trash','EmployeController@showtrash');
Route::post('articles/{id}/restore','ArticleController@restore');
Route::get('articles/trash','ArticleController@showtrash');
Route::resource('roles','RoleController');
Route::resource('articles','ArticleController');
Route::resource('employes','EmployeController');
Route::resource('pictures','PictureController'); 
Route::resource('tags','TagController'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
