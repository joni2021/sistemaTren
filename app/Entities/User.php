<?php

namespace app\Entities;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Auth;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Database\Eloquent\SoftDeletes;
use Bican\Roles\Traits\HasRoleAndPermission;
use Bican\Roles\Contracts\HasRoleAndPermission as HasRoleAndPermissionContract;
use Bican\Roles\Models\Role;


class User extends Model implements AuthenticatableContract, CanResetPasswordContract, HasRoleAndPermissionContract
{
    use Authenticatable, CanResetPassword, HasRoleAndPermission;
//    use SoftDeletes;

    protected $table = 'users';
    protected $fillable = ['email', 'password', 'user','name','last_name'];
    protected $hidden = ['password', 'remember_token'];


//    protected $dates = ['created_at', 'updated_at','deleted_at'];

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


    public function getFullNameAttribute(){
        return ucwords($this->last_name.", ".$this->name);
    }

}