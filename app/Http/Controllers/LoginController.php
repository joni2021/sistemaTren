<?php

namespace app\Http\Controllers;
use app\Entities\User;
use app\Http\Repositories\UserRepo;
use app\Http\Requests\UserCreateRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller {


    public function getLogin()
    {
        if(Auth::check())
            return  redirect()->intended('users');
        else
            return view('auth/login');
    }

    public function authenticate(Request $request)
    {
        if (Auth::attempt(['user' => $request->user, 'password' => $request->password]))
            if($request->user == "admin")
                return  redirect()->route('users.index');
            else
                return  redirect()->intended('users');
        else
            return redirect()->back()->withErrors('El usuario no existe o la contraseña es incorrecta.');


        /*
                //$ldap = new LdapFunction();

                if ($this->ldap->auth($request->email, $request->password)) {
                    $user = $this->userRepo->SearchUser($request->email);

                    if (is_null($user)) {

                        $user = new User();
                        $user->email = $request->email;
                        $user->profiles_id = '5';
                        $user->save();
                        //$data['email'] = $request->email;
                        //$user = $this->userRepo->create($data);
                        Auth::login($user);
                        return redirect()->intended('home');
                    } else {
                        Auth::login($user);
                        return redirect()->intended('home');
                    }
                }
                return redirect('login')->with('msg_ok', 'Los datos no existen en la base de datos.');
                //  return redirect('personas')->with('msg_ok', 'persona creada correctamente');
                */
        // login local

       /* if (Auth::attempt(['email' => $request->email, 'password' => $request->password]))
            return  redirect()->intended('/');
        else
            return redirect()->back()->with('msg_ok','El usuario no existe o la contraseña es incorrecta.');
        */
        // }
        //   else
        // {
        //   return  redirect()->intended('home');
        //}


    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('auth.login');
    }


}