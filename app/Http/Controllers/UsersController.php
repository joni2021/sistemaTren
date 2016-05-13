<?php
namespace app\Http\Controllers;

use app\Entities\User;
use app\Http\Requests\CreateUsersRequest;

class UsersController extends Controller {

    protected $user;

    public function __construct(User $user){
        $this->user = $user;
    }

    public function index()
    {
        $data['users'] = $this->user->all();

        return view('users.index')->with($data);
    }

    public function create()
    {

        return view('users.create');
    }

    public function store(CreateUsersRequest $request)
    {

        $data = $request->only('name', 'last_name', 'email', 'user', 'password');
        $this->user->create($data);

        return redirect()->route('usersindex')->with('ok','Se creo correctamente el usuario');

    }

    public function edit($id = null)
    {
        $model =$this->user->find($id);
        return view('users.create', compact('model'));

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