<?php
namespace app\Http\Controllers;

use app\Entities\User;

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


}