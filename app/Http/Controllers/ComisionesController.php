<?php
namespace app\Http\Controllers;

use app\Entities\Comision;
use app\Entities\User;
use app\Http\Repositories\UserRepo;
use app\Http\Requests\CreateComisionesRequest;
use app\Http\Requests\CreatePermissionsRequest;
use Bican\Roles\Models\Permission;
use Illuminate\Http\Request;

class ComisionesController extends Controller {

    protected $comision;
    protected $userRepo;
    protected $user;

    public function __construct(Comision $comision, UserRepo $userRepo,User $user){
        $this->comision = $comision;
        $this->userRepo = $userRepo;
        $this->user = $user;
    }

    public function index()
    {
        $data['comisiones'] = $this->comision->all();
        $data['user'] = $this->userRepo->listsCombo('user','id');

        return view('comision.index')->with($data);
    }

    public function create()
    {
        return view('comision.formComision');
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