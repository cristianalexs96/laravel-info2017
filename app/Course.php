<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Module;
use App\Student;
use App\Professor;

class Course extends Model
{
    protected $table = 'courses';

    protected $fillable = ['nombre', 'descripcion', 'inicio', 'final', 'direccion', 'localidad'];

    public function modules(){

        return $this->hasMany(Module::class);

    }

    public function students(){

        return $this->belongsToMany(Student::class);

    }

    public function professors(){

        return $this->belongsToMany(Professor::class);

    }

}