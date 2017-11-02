<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Module;

class ModulesController extends Controller
{
    public function index( ) 
	{
		$courses = Module::orderBy( 'id', 'desc' )->paginate( 10 );
		return view( 'modules.index', [ 'modules' => $courses ] );
	}

	public function show ( Module $module ) 
	{
		return view( 'modules.show' );
	}

	public function create( ) 
	{
		return view( 'modules.create' );
	}

	public function store(  ) // CreateCourseRequest $request
	{

		return view( 'modules.show' );
	}

	public function edit( Module $module )
	{

		return view( 'modules.edit' );
	}

	public function update( Module $module ) // UpdateCourseRequest $request 
	{
		
		return view( 'modules.show' );
	}

	public function delete( Course $course )
	{
		return view( 'modules.index' );
	}
}
