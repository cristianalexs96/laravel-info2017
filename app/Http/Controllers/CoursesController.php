<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

use App\Course; 
use App\Module;
use App\Locality;

class CoursesController extends Controller
{

    public function index( ) 
    {
        $courses = Course::orderBy( 'id', 'desc' )->paginate( 10 );
        return view( 'courses.index', [ 'courses' => $courses] );
    }
    public function show(Course $course) 
    {
        $modules = $course->modules;
        return view('courses.show')->with( [
            'courses' => $course,
            'modules' => $modules,
            
        ] );
    }

    public function create()
    {
    
        $localitys = Locality::all();

        return view ('courses.create')->with(['localitys' => $localitys]);
    }

    public function store(CreateCourseRequest $request)
    {

        $course = Course::create($request->only('nombre', 'descripcion', 'inicio', 'final', 'direccion','localidad'));

        return redirect()->route('courses.index');

    }

    public function edit(Course $course)
    {
        return view('courses.edit')->with(['course' => $course]);

    }

    public function update(Course $course, UpdateCourseRequest $request)
    {
        $course->update(

            $request->only('id', 'nombre', 'descripcion', 'inicio', 'final', 'direccion')
        );

        return redirect()->route('courses.index');
    }

    public function delete(Course $course )
    {
        $modules = $course->modules;

        if ( ! is_null ($modules) )
        {

        foreach( $modules as $module ) {
            $module->delete();          }

        }

        $course->delete();
        session()->flash( 'message', 'Curso eliminado!' );
        
        return redirect()->route( 'courses.index' );
    }
}
