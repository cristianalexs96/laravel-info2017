<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Module;

class ModulesController extends Controller
{
    public function index( ) 
	{
		$course = Module::orderBy( 'id', 'desc' )->paginate( 10 );
		return view( 'modules.index', [ 'modules' => $course ] );
	}
	
	public function show (Module $module) 
	{
		return view( 'modules.show' );
	}

   public function create()
    {
    	return view ('modules.create');
    }

    public function store(CreateModuleRequest $request)
    {

        $module = Module::create($request->only('nombre', 'descripcion', 'dias', 'horarios'));

        return redirect()->route('hola');

    }

    public function edit(Module $module)
    {
        return view('modules.edit')->with(['modules' => $module]);
    }

    public function update(Module $module, UpdateModuleRequest $request)
    {
        $module->update(

            $request->only('nombre', 'descripcion', 'dias', 'horarios')
        );

        return redirect()->route('hola'); 
    }

    public function delete(Module $module)
    {

        $module->delete();
        session()->flash( 'message', 'Modulo eliminado!' );
        return redirect()->route( 'module_path' );

    }
}