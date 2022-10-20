<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PermisosDelRol extends Model
{
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'rol_id',
        'permiso_id'
    ];

    protected $table = "permisos_de_roles";
    public $timestamps = false;
}
