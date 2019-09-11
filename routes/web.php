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

Route::get('/', function () {
    echo 'This is Home page';
});

Route::get('/about', function () {
    return ' This is About page';
});

Route::get('/contact', function () {
    return 'This is Contact page';
});

Route::get('/user', function ($name = 'Vinataba') {
    return view('user',compact('name'));
});

Route::get('/user/{name?}', function ($name = 'Vinataba') {
    echo 'This is: '.$name;
});

Route::get('/home', 'HomeController@index');
