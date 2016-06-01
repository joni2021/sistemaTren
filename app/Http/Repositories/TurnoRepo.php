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


//            $turno = $this->turnoRepo->all();
//
//            if(count($turno) > 0)
//            {
//            echo 'mayor a 0';
//            }
//            else
//                {
//                    echo 'igual a 0';
//                }
}