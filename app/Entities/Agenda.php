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
    public function setFechaInicioAttribute($dato){
        $this->attributes['fecha_inicio'] = date("Y-m-d",strtotime($dato));
    }

    public function setFechaFinAttribute($dato){
        $this->attributes['fecha_fin'] = date("Y-m-d",strtotime($dato));
    }

//    public function getFechaInicioAttribute($dato){
//        return date("d-m-Y",strtotime($dato));
//    }
//
//    public function getFechaFinAttribute($dato){
//        return date("d-m-Y",strtotime($dato));
//    }
}