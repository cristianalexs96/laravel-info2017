<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Student;
use App\Professor;
use App\Course;


class Module extends Model
{

    protected $table = 'modules';

    protected $fillable = ['course_id', 'nombre', 'descripcion', 'dias', 'hsinicio', 'hsfin'];

    public function courses()
    {
        return $this->belongsTo(Course::class);
    }

    public function professors()
    {
        return $this->belongsToMany(Professor::class);
    }

    public function students()
    {
        return $this->belongsToMany(Student::class);
    }


}
