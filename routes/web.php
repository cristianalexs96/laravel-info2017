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

Route::name('course_path')->get('/courses', 'CoursesController@index');

Route::name('create_course_path')->get('/courses/create', 'CoursesController@create');

Route::name('store_course_path')->post('/courses', 'CoursesController@store');

Route::name('course_path')->get('/courses/{course}', 'CoursesController@show');

Route::name('edit_course_path')->get('/courses/{course}/edit', 'CoursesController@edit');

Route::name('update_course_path')->put('/courses/{course}', 'CoursesController@update');

Route::name('delete_course_path')->delete('/courses/{course}', 'CoursesController@delete');