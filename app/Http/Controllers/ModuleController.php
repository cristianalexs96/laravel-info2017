<?php
namespace App\Http\Controllers;
use App\Http\Requests\CreateModuleRequest;
use App\Http\Requests\UpdateModuleRequest;
use Illuminate\Http\Request;
use App\Module; 
class ModulesController extends Controller
{
        public function index()
    {
        $module = Module::orderBy('id', 'desc')->paginate(10);
        return view('modules.index')->with(['modules' => $module]);
    }
    public function show(Module $module)
    {

        return view('modules.show')->with(['modules' => $module]);
    }
    public function create()
    {
        return view ('modules.create');
    }
    public function store(CreateModulesRequest $request)
    {
        $module = Module::create($request->only('nombre', 'descripcion', 'Dia', 'Horario', 'Docente'));
        return redirect()->route('exito');
    }
    public function edit(Module $module)
    {
        return view('modules.edit')->with(['modules' => $module]);
    }
    public function update(Modules $module, UpdateModuleRequest $request)
    {
        $module->update(
            $request->only('nombre', 'descripcion', 'Dia', 'Horario', 'Docente')
        );
        return redirect()->route('exito'); 
    }
    public function delete(Module $module)
    {
        $module->delete();
        return redirect()->route('exito'); 
    }
}
