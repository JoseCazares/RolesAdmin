<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Rol extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'NombreRol',
        'Descripcion'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

    
}
