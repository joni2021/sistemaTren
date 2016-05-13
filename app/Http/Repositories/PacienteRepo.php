<?php
/**
 * Created by PhpStorm.
 * User: mbarrios
 * Date: 3/7/15
 * Time: 12:42
 */

namespace app\Http\Repositories;
use app\Entities\Paciente;

class PacienteRepo extends BaseRepo {

    public function getModel()
    {
        return new Paciente;
    }

}