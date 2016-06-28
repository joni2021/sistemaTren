<?php
namespace app\Http\Controllers;

use app\Entities\Especialidad;
use app\Http\Repositories\PacienteRepo;
use app\Http\Repositories\TurnoRepo;
use app\Http\Requests\CreatePacienteRequest;
use Illuminate\Http\Request;
class PacientesController extends Controller {

    protected $pacienteRepo;
    protected $especialidad;
    protected $turnoRepo;
    public function __construct(TurnoRepo $turnoRepo, PacienteRepo $pacienteRepo, Especialidad $especialidad)
    {
        $this->pacienteRepo = $pacienteRepo;
        $this->especialidad = $especialidad;
        $this->turnoRepo = $turnoRepo;
    }

    public function index()
    {

        return view('pacientes.alta_paciente');
    }

    public function create()
    {

        return view('pacientes.alta_paciente');
    }

    public function edit($id)
    {
        $data['paciente'] = $this->pacienteRepo->find($id);
        return view('pacientes.alta_paciente')->with($data);
    }

    public function update($id,Request $request)
    {
        $datos = $request->all();
        $paciente = $this->pacienteRepo->find($id);

        if($paciente->update($datos))
            return redirect()->back()->with('ok','Se editaron correctamente los datos del paciente');
        else
            return redirect()->back()->withErrors('No se pudieron editar correctamente los datos del paciente');

    }

    public function store(CreatePacienteRequest $request)
    //public function store(Request $request)
    {   
        $data = $request->only('dni', 'tipo_dni', 'nombre','apellido', 'sexo', 'fecha_nacimiento','telefono', 'nacionalidad', 'lugar_nacimiento','lectura', 'escritura', 'hijos_mayores','hijos_menores', 'enfermedad_cronica', 'enfermedad_rs','discapacidad', 'tipo_discapacidad', 'presion_arterial_max','presion_arterial_min', 'glusemia', 'colesterol','perimetro_abdominal', 'perimetro_craneal', 'percentilo','imc', 'pco','altura', 'peso', 'talla','observaciones','calle','numero','manzana','barrio','partido','localidad','plan_social','ocupacion');
        $this->pacienteRepo->create($data);

        return redirect()->route('pacientesderivaciones');

    }


    public function derivaciones()
    {

        //ultimo paciente insertado
        $paciente = $this->pacienteRepo->all()->last();
        $especialidades = $this->especialidad->all();
        return view ('pacientes.derivaciones', compact('paciente', 'especialidades'));
    }

    public function derivacionesEdit($id)
    {
        //ultimo paciente insertado
        $paciente = $this->pacienteRepo->find($id);
        $especialidades = $this->especialidad->all();
        return view ('pacientes.derivaciones', compact('paciente', 'especialidades'));
    }

    public function postDerivaciones(Request $request)
    {

        //post derivacion
        $prioridad = $this->turnoRepo->asignPrioridad($request->get('prioridad'));
        $especialidad = $this->especialidad->find($request->get('especialidades_id'));
        $nro_turno = $this->turnoRepo->getModel()->where("especialidades_id",$especialidad->id)->get()->last()->turno;
        $nro_turno = str_replace($especialidad->prefijo."-","",$nro_turno) + 1;

        $this->turnoRepo->create([

            'turno' => $especialidad->prefijo.'-'.$nro_turno,
            'especialidades_id' => $request->get('especialidades_id'),
            'pacientes_id' => $request->get('pacientes_id'),
            'prioridad' => $prioridad

        ]);

        return redirect()->route('pacientesturnoAsignado');
    }


    public function turnoAsignado()
    {
        $turno = $this->turnoRepo->all()->last();
        return view('pacientes.turno_asignado', compact('turno'));
    }
}