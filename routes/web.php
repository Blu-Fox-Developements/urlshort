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
    return view('welcome');
});

//Redirects the user by using the Primary Key to find the full URL.
Route::get('/re/{id}', function ($id) {
    return redirect(app('App\Http\Controllers\PostsController')->getUrl($id));
});

//View used to convert URL, decodes URL then sends to database.
//Then uses Primary Key to create the url.
Route::get('/convert/{url}', function ($url) {
    $url = urldecode($url);
    $url = str_replace('\'', '/', $url);
    $url = str_replace('"', '?', $url);

    $id = app('App\Http\Controllers\PostsController')->insertUrl($url);

    return "http://127.0.0.1:8000/re/" . $id;
});