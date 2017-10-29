<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Course; 

class CourseController extends Controller
{
    public function create()
    {
    	return view ('course/create');
    }

    public function store(Request $request)
    {

        $this->validate($request,[
            'nombre'=>'required',
            'inicio' => 'required|date',
            'final' => 'required|date',
            'dirección'=>'required'
        ]);


        $course = new Course;
        $course->nombre = $request->get('nombre');
        $course->descripción = $request->get('descripción');
        $course->inicio = $request->get('inicio');
        $course->final = $request->get('final');
        $course->dirección = $request->get('dirección');
        $course->localidad = $request->get('localidad');
        $course->save();

        dd($request->all());

    }
}
