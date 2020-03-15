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

Route::get('/author', function () {
return \App\Author::all('id','nama','email','telpon');
});

Route::get('/author/{id}', function ($id) {
    return \App\Author::all('id', 'nama', 'email', 'telpon')->where('id',$id);
});