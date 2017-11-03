<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

use App\Course; 

class CoursesController extends Controller
{

        public function index()
    {
        $course = Course::orderBy('id', 'desc')->paginate(10);

        return view('courses.index')->with(['courses' => $course]);
    }

    public function show(Course $course)
    {
        //$post = Post::find($postID);

       // if( is_null($post)) {
          //  abort(404); }

        return view('courses.show')->with(['courses' => $course]);
    }


    public function create()
    {
    	return view ('courses.create');
    }

    public function store(CreateCourseRequest $request)
    {

        $course = Course::create($request->only('nombre', 'descripcion', 'inicio', 'final', 'direccion', 'localidad'));

        return redirect()->route('hola');

    }

    public function edit(Course $course)
    {
<<<<<<< HEAD
        return view('courses.edit')->with(['courses' => $course]);
=======
        return view('courses.edit')->with(['course' => $course]);
>>>>>>> origin/Cristian
    }

    public function update(Course $course, UpdateCourseRequest $request)
    {
        $course->update(

            $request->only('nombre', 'descripcion', 'inicio', 'final', 'direccion', 'localidad')
        );

        return redirect()->route('hola');  #--------modificar el redirect con las rutas correctas
    }

    public function delete(Course $course)
    {

        $course->delete();

        return redirect()->route('hola'); #----modificar ruta correcta

    }
}
