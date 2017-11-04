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

Route::name('hola')->get('/', function () {
    return view('welcome');
});

Route::resource('courses', 'CoursesController' );
Route::name('store_course_path')->post('/courses', 'CoursesController@store');
Route::name('create_module_path')->get('/modules/create/{course}', 'ModulesController@create');
Route::name('store_module_path')->post('/modules', 'ModulesController@store');


#Route::resource('modules', 'ModulesController' );