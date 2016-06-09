<?php

namespace app\Entities;

use Illuminate\Database\Eloquent\Model;
use app\Entities\User;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comision extends Model
{
    use SoftDeletes;

    protected $table = 'comisiones';
    protected $fillable = ['localidad', 'provincia', 'fecha_llegada','fecha_partida'];

    protected $dates = ['deleted_at'];

    //Relaciones
    public function User()
    {
        return $this->belongsToMany(User::class);
    }

    public function Agenda()
    {
        return $this->belongsToMany(Agenda::class);
    }

    //Accessors
    public function Dates()
    {
        return $this->fecha_llegada.' hasta '.$this->fecha_partida;
    }

    public function Address()
    {
        return $this->localidad.', '.$this->provincia.', Argentina';
    }

    public function setFechaLlegadaAttribute($dato){
        $this->attributes['fecha_llegada'] = date("Y-m-d",strtotime($dato));
    }

    public function setFechaPartidaAttribute($dato){
        $this->attributes['fecha_partida'] = date("Y-m-d",strtotime($dato));
    }

    public function getFechaLlegadaAttribute($dato){
        return date("d-m-Y",strtotime($dato));
    }

    public function getFechaPartidaAttribute($dato){
        return date("d-m-Y",strtotime($dato));
    }
}