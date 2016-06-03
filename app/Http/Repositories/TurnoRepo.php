<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 30/05/2016
 * Time: 13:07
 */
namespace app\Http\Repositories;
use app\Entities\Turno;

class TurnoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Turno();
    }

    public function asignTurno()
    {
        $turno = Turno::all()->last();
        if(count($turno) > 0)
            return $turno->turno + 1;
        else
            return 1;

    }

    public function asignPrioridad($value)
    {
        if(is_null($value))
            return 0;
        else
            return 1;

    }

    public function turnosPorEspecialidad($value)
    {
        return $this->model->where('especialidades_id', $value)->get();
    }

}