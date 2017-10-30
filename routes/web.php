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
route::name('delete_post_path')->delete('/modules/(modules)', 'ModuleController@delete');
route::name('create_post_path')->get('/modules/create','ModuleController@create');