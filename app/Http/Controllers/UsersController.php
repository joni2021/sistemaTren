<?php
namespace app\Http\Controllers;

use app\Entities\User;
use Bican\Roles\Models\Role;
use app\Http\Requests\CreateUsersRequest;

class UsersController extends Controller {

    protected $user;
    protected $rol;
    public function __construct(User $user, Role $rol){
        $this->user = $user;
        $this->rol = $rol;
    }

    public function index()
    {
        $data['users'] = $this->user->get();

        return view('users.index')->with($data);
    }

    public function create()
    {
        $data['roles'] = $this->rol->all();
        return view('users.create')->with($data);
    }

    public function store(CreateUsersRequest $request)
    {

//        dd($request->all());
//
        $data = $request->only('name', 'last_name', 'email', 'user', 'password');
        $this->user->create($data);

        //Asignar roles a usuarios
        $user = $this->user->all();
        $user->last()->Roles()->sync($request->role_id);

        return redirect()->route('usersindex')->with('ok','Se creo correctamente el usuario');


    }

    public function edit($id = null)
    {

        $model =$this->user->find($id);
        $roles = $this->rol->all();

        return view('users.create', compact('model', 'roles'));

    }

    public function update()
    {

    }

//    public function delete($id = null)
//    {
//        $user = $this->user->find($id);
//        $user->delete();
//        return redirect()->route('usersindex')->with('ok','Se elimino correctamente el usuario');
//    }


}