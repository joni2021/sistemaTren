<?php

namespace app\Entities;

use Illuminate\Database\Eloquent\Model;
use app\Entities\User;

class ComisionUser extends Model
{

    protected $table = 'comision_user';
    protected $fillable = ['comision_id', 'user_id'];


}