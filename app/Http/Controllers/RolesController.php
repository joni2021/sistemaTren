<?php
namespace app\Http\Controllers;

use app\Http\Requests\CreateRolesRequest;
use Bican\Roles\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller {

    protected $rol;

    public function __construct(Role $rol){
        $this->rol = $rol;
    }

    public function index()
    {
        $data['roles'] = $this->rol->all();

        return view('roles.index')->with($data);
    }

    public function create()
    {
        return view('roles.formRoles');
    }

    public function store(CreateRolesRequest $request)
    {
//        $slug = trim(str_replace(" ",".",$request->get('name')));
        $slug = trim($request->get('name'));
//        dd($slug);
        $slug = $this->limpiarCaracteresEspeciales($slug);

        $adminRole = $this->rol->create([
            'name' => $request->get('name'),
            'slug'=> $slug,
            'description' => $request->get('description'), // optional
            'level' => $request->get('level')
        ]);

        return redirect()->route('rolesindex')->with('ok','Se creo correctamente el rol');
    }

    public function edit($id)
    {
        $data['rol'] = $this->rol->find($id);

        return view('roles.formRoles')->with($data);
    }

    public function update($id,CreateRolesRequest $request)
    {
        $data['rol'] = $this->rol->find($id);
        if($data['rol']->name != $request->get('name')){
            $slug = trim($request->get('name'));
            $data['rol']->slug = $this->limpiarCaracteresEspeciales($slug);
        }
        $data['rol']->fill($request->only('name','description','level'));

        if($data['rol']->save())
            return redirect()->route('rolesindex')->with('ok','Se modificó correctamente el rol');
        else
            return view('roles.formRoles')->withErrors('No se pudo modificar el rol');
    }



    public function delete($id){

        $rol = $this->rol->find($id);
        if($rol->delete())
            return redirect()->back()->with('ok','Se eliminó correctamente el rol');
        else
            return redirect()->back()->withErrors('No se pudo eliminar rol');

    }

}