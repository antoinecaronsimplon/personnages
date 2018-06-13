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

Route::get('/layouts', function () {
    return view('layouts');
});

Route::get('/', 'CharactersController@index');

// Route::get('/header', function () {
//     return view('header');
// });

// Route::get('/footer', function () {
//     return view('footer');
// });

// Route::get('/listpage', function () {
//     return view('listpage');
// });

// Route::get('/viewpage', function () {
//     return view('viewpage');
// });