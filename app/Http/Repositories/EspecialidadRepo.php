<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace app\Http\Repositories;
use app\Entities\Especialidad;

class EspecialidadRepo extends BaseRepo {

    public function getModel()
    {
        return new Especialidad();
    }

    public function getEspecialidad($value)
    {

        return $this->model->where('especialidad', $value )->get();

    }

//        return $this->model
//        ->orderBy('name')
//        ->select(DB::raw("concat('[', iata, '] ', name, ' - ', localidad) as description, id"))
//        ->where('provincia_id', $idProvincia)
//        ->lists('description', 'id');

}