<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 13/05/2016
 * Time: 11:22
 */
namespace app\Http\Controllers\Especialidad;
use app\Http\Controllers\Controller;
use app\Http\Repositories\EspecialidadRepo;


class MedicaController extends Controller {

    protected $especialidadRepo;

    public function __construct(EspecialidadRepo $especialidadRepo)
    {
        $this->especialidadRepo = $especialidadRepo;
    }

    public function index()
    {

        $this->especialidadRepo->getEspecialidad('medica');
        return view('especialidades.medica.index');

    }

}