<?php
namespace app\Http\Controllers;

use app\Entities\Agenda;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AgendaController extends Controller {

    protected $agenda;

    public function __construct(Agenda $agenda){
        $this->agenda = $agenda;
    }

    public function index()
    {
        $data['comision'] = Auth::user()->comision;
        if($data['comision']->count() > 1){
            $array = [];
            foreach($data['comision'] as $c){
                $array["$c->id"] =  $c->Address();
            }
            $data['comision'] = $array;
        }

        return view('agenda.index')->with($data);
    }

    public function store(CreateComisionesRequest $request)
    {
        $fechas = explode(' hasta ',$request->get('daterange'));

        $locacion = explode(',',$request->get('address'));

        $datos = array('fecha_llegada' => $fechas[0],'fecha_partida' => $fechas[1], 'localidad' => trim($locacion[0]), 'provincia' => trim($locacion[1]));

        $this->comision->create($datos);

        return redirect()->route('comisionesindex')->with('ok','Se creo correctamente la comisión');
    }

    public function edit($id)
    {
        $data['comision'] = $this->comision->find($id);

        return view('comision.formComision')->with($data);
    }

    public function update($id,CreateComisionesRequest $request)
    {
        $fechas = explode(' hasta ',$request->get('daterange'));

        $locacion = explode(',',$request->get('address'));

        $datos = array('fecha_llegada' => $fechas[0],'fecha_partida' => $fechas[1], 'localidad' => trim($locacion[0]), 'provincia' => trim($locacion[1]));

        $comision = $this->comision->find($id);

        $comision->fill($datos);

        if($comision->save())
            return redirect()->route('comisionesindex')->with('ok','Se modificó correctamente el permiso');
        else
            return view('comision.formRoles')->withErrors('No se pudo modificar el permiso');
    }


    public function asignarUsuarios($id,Request $request){
        $comision = $this->comision->find($id);

        $comision->User()->detach();

        $comision->User()->attach($request->user_id);

        return redirect()->back()->with('ok','Se asignaron correctamente los usuarios');
    }

    public function consultarUsuarios($id){

        $comision = $this->comision->find($id);

        $users = $comision->User()->get()->lists('user','id');

        if($users->count() > 0){
            return response()->json($users);
        }

    }


    public function delete($id){

        $comision = $this->comision->find($id);
        if($comision->delete())
            return redirect()->back()->with('ok','Se eliminó correctamente la comisión');
        else
            return redirect()->back()->withErrors('No se pudo eliminar la comisión');

    }

}