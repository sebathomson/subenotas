<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use SoftDeletes;
    
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'alumnos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombres', 'apellidos', 'rut', 'celular', 'email', 'comuna', 'colegio', 'curso', 'promedio', 'sede', 'consulta', 'asignaturas'];
}
