<?php
namespace app\Http\Controllers;

use app\Http\Requests\CreatePermissionsRequest;
use Bican\Roles\Models\Permission;

class PermisosController extends Controller {

    protected $permisos;

    public function __construct(Permission $permisos){
        $this->permisos = $permisos;
    }

    public function index()
    {
        $data['permisos'] = $this->permisos->all();

        return view('permisos.index')->with($data);
    }

    public function create()
    {
        return view('permisos.formPermisos');
    }

    public function store(CreatePermissionsRequest $request)
    {
        $name = $request->get('action')." ".$request->get('name');
//        $slug = trim(str_replace(" ",".",$request->get('name')));
        $slug = trim($name);
//        dd($slug);
        $slug = $this->limpiarCaracteresEspeciales($slug);

        $adminRole = $this->permisos->create([
            'name' => $name,
            'slug'=> $slug,
            'description' => $request->get('description') // optional
        ]);

        return redirect()->route('permisosindex')->with('ok','Se creo correctamente el permiso');
    }

    public function edit($id)
    {
        $data['permiso'] = $this->permisos->find($id);

        return view('permisos.formPermisos')->with($data);
    }

    public function update($id,CreatePermissionsRequest $request)
    {
        $data['permiso'] = $this->permisos->find($id);
        if(($data['permiso']->nameSinAction() != $request->get('name')) || ($data['permiso']->action() != $request->get('action'))) {
            $name = $request->get('action')." ".$request->get('name');
//        $slug = trim(str_replace(" ",".",$request->get('name')));
            $slug = trim($name);
//        dd($slug);
            $data['permiso']->slug = $this->limpiarCaracteresEspeciales($slug);
            $data['permiso']->name = $name;
        }
        $data['permiso']->fill($request->only('description'));

        if($data['permiso']->save())
            return redirect()->route('permisosindex')->with('ok','Se modificó correctamente el permiso');
        else
            return view('permisos.formRoles')->withErrors('No se pudo modificar el permiso');
    }



    public function delete($id){

        $permiso = $this->permisos->find($id);
        if($permiso->delete())
            return redirect()->back()->with('ok','Se eliminó correctamente el permiso');
        else
            return redirect()->back()->withErrors('No se pudo eliminar el permiso');

    }

}