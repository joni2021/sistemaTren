<?php

namespace app\Entities;
use Illuminate\Database\Eloquent\SoftDeletes;


class Especialidad extends Entity
{
    use SoftDeletes;

    protected $table        = 'especialidades';
    protected $fillable = ['especialidad'];

    protected $dates = ['deleted_at'];

    public function Turno()
    {
        return $this->belongsToMany(Turno::getClass(), 'especialidades_id');
    }

    public function getEspecialidadAttribute($dato){
        return ucfirst($dato);
    }

}
