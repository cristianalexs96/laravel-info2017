<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['nombre', 'descripcion', 'inicio', 'final', 'direccion', 'localidad'];

    protected $dates = [ 'deleted_at' ];

    public function modules(){

        return $this->hasMany(App\Module::class);

    }

    public function students(){

        return $this->belongsToMany(App\Student::class);

    }

    public function professors(){

        return $this->belongsToMany(App\Professor::class);

    }


}