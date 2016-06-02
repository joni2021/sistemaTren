<?php

namespace app\Entities;



class Especialidad extends Entity
{
    protected $table        = 'especialidades';
    protected $fillable = ['especialidad'];
    // protected $hidden   = ['password', 'remember_token'];


    public function Turno()
    {
        return $this->belongsToMany(Turno::getClass(), 'especialidades_id');
    }



}
