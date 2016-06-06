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

class TraumatologiaController extends Controller {

    protected $turnoRepo;
    protected $especialidadRepo;
    protected $especialidad;

    public function __construct(TurnoRepo $turnoRepo, EspecialidadRepo $especialidadRepo)
    {
        $this->turnoRepo = $turnoRepo;
        $this->especialidadRepo = $especialidadRepo;
        $this->especialidad = 'Traumatologia';
    }


    public function index()
    {
        $especialidad = $this->especialidadRepo->getEspecialidad($this->especialidad);
        $turnos = $this->turnoRepo->turnosPorEspecialidad($especialidad->id);
        return view('especialidades.traumatologia.index', compact('especialidad', 'turnos'));

    }

}