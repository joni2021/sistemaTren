<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 01/06/2016
 * Time: 11:59
 */

namespace app\Http\Controllers\Especialidad;
use app\Http\Controllers\Controller;

class TraumatologiaController extends Controller {

    public function index()
    {
        return view('especialidades.traumatologia.index');

    }

}