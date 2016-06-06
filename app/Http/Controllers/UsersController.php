<?php
namespace app\Http\Controllers;

use app\Entities\User;
use app\Http\Repositories\UserRepo;
use Bican\Roles\Models\Role;
use app\Http\Requests\CreateUsersRequest;

class UsersController extends Controller {

    protected $user;
    protected $rol;

    public function __construct(UserRepo $user, Role $rol){
        $this->user = $user;
        $this->rol = $rol;
    }

    public function index()
    {
        $data['users'] = $this->user->all();

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
        $user->last()->roles()->sync($request->role_id);

        return redirect()->route('usersindex')->with('ok','Se creo correctamente el usuario');


    }

    public function edit($id = null )
    {

        $model = $this->user->find($id);
        $roles = $this->rol->all();

        return view('users.create', compact('model', 'roles'));

    }

    public function update(CreateUsersRequest $request, $id = null)
    {
        $user = $this->user->find($id);
        $data = $request->only('name', 'last_name', 'email', 'user', 'password');
        $this->user->edit($user, $data);

        //Asignar roles a usuarios
        $user = $this->user->find($id);
        $user->detachAllRoles();

        $user->roles()->sync($request->role_id);

        return redirect()->route('usersindex')->with('ok','Se edito correctamente el usuario');

    }

//    public function delete($id = null)
//    {
//        $user = $this->user->find($id);
//        $user->delete();
//        return redirect()->route('usersindex')->with('ok','Se elimino correctamente el usuario');
//    }


}