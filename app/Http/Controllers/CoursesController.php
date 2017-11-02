<?php

namespace App\Http\Controllers;

use App\Course;

//use App\Http\Requests\CreatePostRequest;

//use App\Http\Requests\UpdatePostRequest;

use Illuminate\Http\Request;

class CoursesController extends Controller
{
    
	public function index( ) 
	{
		$courses = Course::orderBy( 'id', 'desc' )->paginate( 10 );
		return view( 'courses.index', [ 'courses' => $courses] );
	}

	public function show( Course $course) 
	{
		$modules = $course->modules;
		//dd($modules);
		return view( 'courses.show' )->with( [
			'course' => $course, 
			'modules' => $modules
		] );
	}

	public function create( ) 
	{
		return view( 'courses.create' );
	}

	public function store(  ) // CreateCourseRequest $request
	{

		return view( 'courses.show' );
	}

	public function edit( Course $course )
	{

		return view( 'courses.edit' );
	}

	public function update( Course $course ) // UpdateCourseRequest $request 
	{
		
		return view( 'courses.show' );
	}

	public function delete( Course $course )
	{
		return view( 'courses.index' );
	}
}
