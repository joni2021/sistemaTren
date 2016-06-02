<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 13/05/2016
 * Time: 11:22
 */
namespace app\Http\Controllers\Especialidad;
use app\Http\Controllers\Controller;


class OtorrinolaringologiaController extends Controller {

    public function index()
    {
        return view('especialidades.otorrinolaringologia.index');

    }

}