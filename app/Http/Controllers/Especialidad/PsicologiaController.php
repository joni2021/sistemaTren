<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 01/06/2016
 * Time: 11:59
 */

namespace app\Http\Controllers\Especialidad;
use app\Http\Controllers\Controller;
use app\Http\Repositories\EspecialidadRepo;
use app\Http\Repositories\TurnoRepo;

class PsicologiaController extends Controller {


    protected $turnoRepo;
    protected $especialidadRepo;
    protected $especialidad_id;

    public function __construct(TurnoRepo $turnoRepo, EspecialidadRepo $especialidadRepo)
    {
        $this->turnoRepo = $turnoRepo;
        $this->especialidadRepo = $especialidadRepo;
        $this->especialidad_id = 'Psicólogo';
    }

    public function index()
    {

        $especialidad = $this->especialidadRepo->getEspecialidad($this->especialidad_id);
        $turnos = $this->turnoRepo->turnosPorEspecialidad($especialidad->id);


        return view('especialidades.psicologia.index', compact('especialidad', 'turnos'));

    }

}