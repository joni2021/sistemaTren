<?php
namespace app\Http\Controllers;

class UsersController extends Controller {


    public function index()
    {
        return view('pacientes.alta_paciente');
    }


}