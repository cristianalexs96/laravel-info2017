<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['nombre', 'descripcion', 'inicio', 'final', 'direccion', 'localidad'];

    public function modules(){

        return $this->hasMany('App\Module');

    }

    public function students(){

        return $this->belongsToMany('App\Student');

    }

    public function professors(){

        return $this->belongsToMany('App\Professor');

    }

}