<?php

namespace app\Entities;

use Illuminate\Database\Eloquent\Model;

class Agenda extends Model
{

    protected $table = 'agendas';
    protected $fillable = ['comision_id', 'fecha_inicio', 'fecha_fin', 'hora','evento'];


    //Relaciones
    public function Comision()
    {
        return $this->belongsTo(Comision::class);
    }

    //Accessors
    public function setFechaPartidaAttribute($dato){
        $this->attributes['fecha'] = date("Y-m-d",strtotime($dato));
    }

    public function getFechaAttribute($dato){
        return date("d-m-Y",strtotime($dato));
    }
}