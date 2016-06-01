<?php
namespace app\Http\Controllers;
use app\Http\Repositories\EspecialidadRepo;
use app\Http\Repositories\PacienteRepo;
use app\Http\Repositories\TurnoRepo;
use app\Http\Requests\CreatePacienteRequest;
use Illuminate\Http\Request;
class PacientesController extends Controller {

    protected $pacienteRepo;
    protected $especialidadRepo;
    protected $turnoRepo;
    public function __construct(TurnoRepo $turnoRepo, PacienteRepo $pacienteRepo, EspecialidadRepo $especialidadRepo)
    {
        $this->pacienteRepo = $pacienteRepo;
        $this->especialidadRepo = $especialidadRepo;
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

    public function store(CreatePacienteRequest $request)
    //public function store(Request $request)
    {   
        $data = $request->only('dni', 'tipo_dni', 'nombre','apellido', 'sexo', 'fecha_nacimiento','telefono', 'id_nacionalidad', 'id_lugar_nacimiento','lectura', 'escritura', 'hijos_mayores','hijos_menores', 'enfermedad_cronica', 'enfermedad_rs','discapacidad', 'tipo_discapacidad', 'presion_arterial_max','presion_arterial_min', 'glusemia', 'colesterol','perimetro_abdominal', 'perimetro_craneal', 'percentilo','imc', 'pco','altura', 'peso', 'talla','observaciones');
        $this->pacienteRepo->create($data);

        return redirect()->route('pacientesderivaciones');

    }

    public function edit()
    {
        return view('pacientes.alta_paciente');
    }

    public function update()
    {
        return view('pacientes.alta_paciente');
    }

    public function derivaciones($id = null )
    {
        //ultimo paciente insertado
        $paciente = $this->pacienteRepo->all()->last();
        $especialidades = $this->especialidadRepo->all();
        return view ('pacientes.derivaciones', compact('paciente', 'especialidades'));
    }

    public function postDerivaciones(Request $request)
    {
        //post derivacion
        $nro_turno = $this->turnoRepo->asignTurno();
        $this->turnoRepo->create([

            'turno' => $nro_turno,
            'especialidades_id' => $request->get('especialidades_id'),
            'pacientes_id' => $request->get('pacientes_id')

        ]);

        return redirect()->route('pacientesturnoAsignado');
    }


    public function turnoAsignado()
    {
        $turno = $this->turnoRepo->all()->last();
        return view('pacientes.turno_asignado', compact('turno'));
    }
}