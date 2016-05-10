<?php
namespace app\Http\Controllers;

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


}