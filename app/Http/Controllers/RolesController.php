<?php
namespace app\Http\Controllers;

use App\Http\Requests\CreateRolesRequest;
use Bican\Roles\Models\Role;
use Illuminate\Http\Request;

class RolesController extends Controller {

    protected $role;

    public function __construct(Role $role){
        $this->role = $role;
    }

    public function index()
    {
        $data['roles'] = $this->role->all();

        return view('roles.index')->with($data);
    }

    public function create()
    {
        return view('roles.formRoles');
    }


    public function store(CreateRolesRequest $request)
    {
        dd($request->request);
        $slug = str_replace(" ","",$request->get('name'));
        dd($slug);
        $adminRole = Role::create([
            'name' => $request->get('name'),

            'description' => '', // optional
            'level' => 1, // optional, set to 1 by default
        ]);
        dd($request->request);
    }


}