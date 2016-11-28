<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Sede extends Model
{
    use SoftDeletes;
    
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'sedes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];
}
