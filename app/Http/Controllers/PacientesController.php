<?php
namespace app\Http\Controllers;
use app\Http\Repositories\PacienteRepo;
use app\Http\Requests\CreatePacienteRequest;
use Illuminate\Http\Request;
class PacientesController extends Controller {

    protected $pacienteRepo;

    public function __construct(PacienteRepo $pacienteRepo)
    {
        $this->pacienteRepo = $pacienteRepo;
    }

    public function index()
    {
        return view('pacientes.alta_paciente');
    }

    public function create()
    {

        return view('pacientes.alta_paciente');
    }

    //public function store(CreatePacienteRequest $request)
    public function store(Request $request)
    {
        $this->pacienteRepo->create($request->all());

        return view('pacientes.alta_paciente');
    }

    public function edit()
    {
        return view('pacientes.alta_paciente');
    }

    public function update()
    {
        return view('pacientes.alta_paciente');
    }


}