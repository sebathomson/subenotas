<?php

namespace App;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Comuna extends Model
{
    use SoftDeletes;
    
    public $timestamps = true;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'comunas';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre'];
}
