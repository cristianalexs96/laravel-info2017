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
Route::name('create_course_path')->get('/courses/create','CourseController@create');
Route::name('store_course_path')->post('/courses','CourseController@store');
Route::name('edit_course_path')->get('/courses/{course}/edit', 'CourseController@edit');
Route::name('update_course_path')->put('/courses/{course}', 'CourseController@update');
Route::name('delete_course_path')->delete('/courses/{course}', 'CourseController@delete');