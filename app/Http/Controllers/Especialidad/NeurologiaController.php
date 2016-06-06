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
use app\Http\Repositories\TurnoRepo;

class NeurologiaController extends Controller {

    protected $especialidadRepo;
    protected $turnoRepo;
    protected $especialidad;

    public function __construct(TurnoRepo $turnoRepo, EspecialidadRepo $especialidadRepo)
    {
        $this->turnoRepo = $turnoRepo;
        $this->especialidadRepo = $especialidadRepo;
        $this->especialidad = 'Medica';
    }


    public function index()
    {
        $especialidad = $this->especialidadRepo->getEspecialidad($this->especialidad);
        $turnos = $this->turnoRepo->turnosPorEspecialidad($especialidad->id);
        return view('especialidades.neurologia.index', compact('especialidad', 'turnos'));

    }

}