<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Student;
use App\Professor;
use App\Course;

class Locality extends Model
{
	protected $table = 'localitys';

    protected $fillable = ['nombre'];



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