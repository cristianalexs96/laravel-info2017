<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatelocalityRequest;
use App\Http\Requests\UpdateLocalityRequest;
use Illuminate\Http\Request;

use App\Course; 
use App\Module;
use App\Locality;


class LocalityController extends Controller
{

    public function index( ) 
    {

        $localitys = Locality::orderBy( 'id', 'name' )->paginate( 10 );
        return view( 'localitys.index',compact('localitys') );
    }


    public function create()
    {
    	return view ('localitys.create');
    }

    public function store(CreatelocalityRequest $request)
    {

        $locality = Locality::create($request->only('nombre'));

        return redirect()->route('locality_path');

    }

    public function edit(Locality $locality)
    {
        return view('localitys.edit')->with(['locality' => $locality]);

    }

    public function update(Locality $locality, UpdateLocalityRequest $request)
    {
        $locality->update(

            $request->only('nombre')
        );

        return redirect()->route('locality_path');
    }
  
}
