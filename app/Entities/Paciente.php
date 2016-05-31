<?php

namespace app\Entities;

class Paciente extends Entity
{
    protected $table = 'paciente';
    protected $fillable = ['dni', 'tipo_dni', 'nombre','apellido', 'sexo', 'fecha_nacimiento','telefono', 'id_nacionalidad', 'id_lugar_nacimiento','lectura', 'escritura', 'hijos_mayores','hijos_menores', 'enfermedad_cronica', 'enfermedad_rs','discapacidad', 'tipo_discapacidad', 'presion_arterial_max','presion_arterial_min', 'glusemia', 'colesterol','perimetro_abdominal', 'perimetro_craneal', 'percentilo','imc', 'pco','altura', 'peso', 'talla','observaciones'];


    // Mutators
    public function setPasswordAttribute($value)
    {
        $this->attributes['password'] = bcrypt($value);
    }

    public function setRememberToken($value)
    {
        $this->remember_token = $value;
    }

    //Scope
    public function scopeNombre($query, $search)
    {
        if (trim($search) != '')
            $query->orWhere('nombre', 'like', "%$search%");

    }

    public function scopeApellido($query, $search)
    {
        if (trim($search) != '')
            $query->orWhere('apellido', 'like', "%$search%");

    }

      public function getFullNamePacienteAttribute()
    {
        return $this->apellido .', '. $this->nombre;
    }


}