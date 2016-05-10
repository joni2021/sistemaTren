<?php

namespace app\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;

class Paciente extends Model implements AuthenticatableContract, CanResetPasswordContract, HasRoleAndPermissionContract
{
    use Authenticatable, CanResetPassword, HasRoleAndPermission;

    protected $table = 'pacientes';
    protected $fillable = ['dni', 'tipo_dni', 'nombre','apellido', 'sexo', 'fecha_nacimiento','telefono', 'id_nacionalidad', 'id_lugar_nacimiento','lectura', 'escritura', 'hijos_mayores','hijos_menores', 'enfermedad_cronica', 'enfermedad_rs','discapacidad', 'tipo_discapacidad', 'presion_arterial_max','presion_arterial_min', 'glusemia', 'colesterol','perimetro_abdominal', 'perimetro_craneal', 'percentilo','imc', 'pco','altura', 'peso', 'talla','observaciones'];


    //Relaciones
    public function Personas()
    {
        return $this->hasMany(Persona::getClass());
    }

    public function MovimientoSubsidio()
    {
        return $this->hasMany(MovimientoSubsidio::getClass());
    }

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

}