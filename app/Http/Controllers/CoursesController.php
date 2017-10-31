<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateCourseRequest;
use App\Http\Requests\UpdateCourseRequest;
use Illuminate\Http\Request;

use App\Course; 

class CoursesController extends Controller
{
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
        return view('courses.edit')->with(['courses' => $course]);
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
