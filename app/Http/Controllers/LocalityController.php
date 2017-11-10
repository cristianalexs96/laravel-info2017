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
        $locality = Locality::orderBy( 'id', 'nombre' )->paginate( 10 );
        return view( 'localitys.index', [ 'localitys' => $locality] );
    }


    public function create()
    {
    	return view ('localitys.create');
    }

    public function store(CreatelocalityRequest $request)
    {

        $locality = Locality::create($request->only('nombre'));

        return redirect()->route('localitys.index');

    }

    public function edit(Locality $locality)
    {
        return view('localitys.edit')->with(['localitys' => $locality]);

    }

    public function update(Locality $locality, UpdateLocalityRequest $request)
    {
        $locality->update(

            $request->only('nombre')
        );

        return redirect()->route('localitys.index');
    }
  
}
