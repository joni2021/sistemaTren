<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 13/05/2016
 * Time: 11:22
 */
namespace app\Http\Controllers\Especialidad;
use app\Entities\Especialidad;
use app\Http\Controllers\Controller;
use app\Http\Repositories\EspecialidadRepo;
use app\Http\Repositories\TurnoRepo;


class OdontologiaController extends Controller {

    protected $turnoRepo;
    protected $especialidadRepo;

    public function __construct(TurnoRepo $turnoRepo, EspecialidadRepo $especialidadRepo)
    {
        $this->turnoRepo = $turnoRepo;
        $this->especialidadRepo = $especialidadRepo;
    }

    public function index()
    {
//      $especialidad = Especialidad::search('especialidad', 'odontologia' );
//      dd($especialidad);
//        $turno = $this->turnoRepo->all();
        $especialidad = $this->especialidadRepo->getEspecialidad('Odontologo');
        $turnos = $this->turnoRepo->turnoPorEspecialidad()->get();

        return view('especialidades.odontologia.index', compact('turnos', 'especialidad'));

    }

}