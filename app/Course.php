<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Module;
use App\Student;
use App\Professor;

class Course extends Model
{   
    protected $table = 'courses';

    //protected $primaryKey = 'course_id';

    protected $fillable = ['nombre', 'descripcion', 'inicio', 'final', 'direccion', 'localidad'];
    
    protected $dates = [ 'deleted_at' ];

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