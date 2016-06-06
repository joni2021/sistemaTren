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

class GinecologiaController extends Controller {


    protected $turnoRepo;
    protected $especialidadRepo;
    protected $especialidad_id;

    public function __construct(TurnoRepo $turnoRepo, EspecialidadRepo $especialidadRepo)
    {
        $this->turnoRepo = $turnoRepo;
        $this->especialidadRepo = $especialidadRepo;
        $this->especialidad = 'Ginecólogo';
    }

    public function index()
    {
        $especialidad = $this->especialidadRepo->getEspecialidad($this->especialidad);
        $turnos = $this->turnoRepo->turnosPorEspecialidad($especialidad->id);

        return view('especialidades.ginecologia.index', compact('especialidad', 'turnos'));

    }

}