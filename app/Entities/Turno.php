<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 30/05/2016
 * Time: 13:06
 */
namespace app\Entities;

class Turno extends Entity
{
    protected $table = 'turnos';
    protected $fillable = ['turno', 'especialidades_id', 'pacientes_id'];

    public function Especialidad()
    {
        return $this->belongsTo(Especialidad::getClass(), 'especialidades_id');
    }

    public function Paciente()
    {
        return $this->belongsTo(Paciente::getClass(), 'pacientes_id');
    }

}