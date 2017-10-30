<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModuleController extends Controller
{
	public fuction delete(module $modules)
{
$modules->delete();
return redirect()->route('delete_post_path');
}
public function create()
{
    return view('modules.create');
}
public function store(CreatePostRequest $request){
    	

   	$modules= new module;
    $modules->nombre = $request->get('nombre');
    $modules->descripcion = $request->get('descripcion');
    $modules->docente = $request->get('docente');
    $modules->save();

    return redirect()->route('posts_path');
    }
    //
}
