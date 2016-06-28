<?php
namespace app\Http\Controllers;

use app\Entities\Agenda;
use app\Entities\Comision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller {

    protected $agenda;
    protected $comision;

    public function __construct(Agenda $agenda,Comision $comision){
        $this->agenda = $agenda;
        $this->comision = $comision;
    }

    public function index(Request $request)
    {
        if($request->get('comision_id'))
        {
            $data['comision'] = $this->comision->find($request->get('comision_id'));
        }
        else
        {
            $data['comision'] = Auth::user()->comision->first();

        }


        if(Auth::user()->hasRole('admin')){
            if(Auth::user()->comision->count() > 1){
                $array = ["0" => "Comisiones"];
                foreach(Auth::user()->comision as $c){
                    $array["$c->id"] =  $c->Address();
                }
                $data['comisiones'] = $array;
            }
        }

        return view('agenda.index')->with($data);

    }

    public function store(Request $request)
    {
        $comision = $request->get('comision_id');

        $fechas = explode(' hasta ',$request->get('daterange'));

        $evento = $request->get('evento');

        if(strtotime($fechas[0]) != strtotime($fechas[1])){
            $datos = array('fecha_inicio' => $fechas[0],'fecha_fin' => $fechas[1], 'evento' => $evento, 'comision_id' => $comision);
        }else{
            $datos = array('fecha_inicio' => $fechas[0], 'evento' => $evento, 'comision_id' => $comision);
        }

        $this->agenda->create($datos);

        return redirect()->route('agendaindex')->with('ok','Se creo correctamente el evento')->with('comision_id',$comision);
    }


    public function delete($id){

        $comision = $this->comision->find($id);
        if($comision->delete())
            return redirect()->back()->with('ok','Se eliminó correctamente la comisión');
        else
            return redirect()->back()->withErrors('No se pudo eliminar la comisión');

    }

}