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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index')->name('home');
Route::get('/course/{id}', 'HomeController@course')->name('course');
Route::get('/student', 'StudentController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/test', 'HomeController@test')->name('home');
Route::get('/films',function(){
    return view('film.index');
});
Route::get('/films/create',function(){
    return view('film.create');
});
Route::get('/films/{slug}',function(){
    return view('film.view');
});