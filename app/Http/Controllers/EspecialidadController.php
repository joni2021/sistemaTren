<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 13/05/2016
 * Time: 11:22
 */
namespace app\Http\Controllers;
use app\Entities\Especialidad;
use app\Http\Controllers\Controller;
use app\Http\Repositories\TurnoRepo;
use Illuminate\Http\Request;

class EspecialidadController extends Controller {

    protected $turnoRepo;
    protected $especialidad;

    public function __construct(TurnoRepo $turnoRepo, Especialidad $especialidad)
    {
        $this->turnoRepo = $turnoRepo;
        $this->especialidad = $especialidad;
    }

    public function index(Request $request,$id)
    {
        $data['especialidad'] = $this->especialidad->find($id);

        $data['turnos'] = $this->turnoRepo->turnosPorEspecialidad($id);

        return view('especialidades.index')->with($data);

    }

    public function delete($id){

        $turno = $this->turnoRepo->find($id);

        if($turno->delete())
            return redirect()->back()->with('ok','Se eliminó correctamente el turno');
        else
            return redirect()->back()->withErrors('No se pudo eliminar el turno');

    }

}