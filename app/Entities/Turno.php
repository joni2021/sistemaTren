<?php
/**
 * Created by PhpStorm.
 * User: llrocha
 * Date: 30/05/2016
 * Time: 13:06
 */
namespace app\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;

class Turno extends Entity
{
    use SoftDeletes;
    protected $table = 'turnos';
    protected $fillable = ['turno', 'especialidades_id', 'pacientes_id', 'prioridad'];
    protected $dates = ['deleted_at'];

    public function Especialidad()
    {
        return $this->belongsTo(Especialidad::getClass(), 'especialidades_id');
    }

    public function Paciente()
    {
        return $this->belongsTo(Paciente::getClass(), 'pacientes_id');
    }

}