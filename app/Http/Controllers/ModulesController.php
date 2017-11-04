<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateModuleRequest;
use App\Http\Requests\UpdateModuleRequest;
use Illuminate\Http\Request;
use App\Module;
use App\Course;

class ModulesController extends Controller
{
    public function index( ) 
	{
		$module = Module::orderBy( 'id', 'desc' )->paginate( 10 );
		return view( 'modules.index', [ 'modules' => $module ] );
	}
	
	public function show (Module $module) 
	{
		return view( 'modules.show' );
	}

    public function create(Course $course)
    {
        return view ('modules.create')->with(['course' => $course]);
    }

    public function store(CreateModuleRequest $request, Course $course)
    {

        $module = Module::create($request->only('course_id', 'nombre', 'descripcion', 'dias', 'hsinicio','hsfin'));

        return redirect()->route('modules.index');

    }

    public function edit(Module $module)
    {
        return view('modules.edit')->with(['module' => $module]);
    }

    public function update(Module $module, UpdateModuleRequest $request)
    {
        $module->update(

            $request->only('nombre', 'descripcion', 'dias', 'hsinicio','hsfin')
        );

        return redirect()->route('modules.index'); 
    }

    public function delete( Module $module )
    {
        $module->delete();
        session()->flash( 'message', 'Modulo eliminado!' );
        return redirect()->route( 'modules.index' );
    }
}
