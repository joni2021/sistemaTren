<?php
namespace app\Http\Controllers;
use app\Http\Controllers\Controller;
use Illuminate\Http\Request;


class PsicologiaController extends Controller {


    public function index()
    {
        return 'index';
    }

    public function create()
    {

        return view('especialidades.psicologia.index');
    }

    //public function store(CreatePacienteRequest $request)
    public function store(Request $request)
    {
        return view('especialidades.psicologia.index');
    }

    public function edit()
    {
        return view('especialidades.psicologia.index');

    }

    public function update()
    {
        return view('especialidades.psicologia.index');

    }


}