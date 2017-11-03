<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Student;
use App\Professor;
use App\Course;

class Module extends Model
{

    protected $table = 'modules';

    //protected $primaryKey = 'module_id';

    protected $fillable = ['nombre', 'descripcion', 'dias', 'horario'];

    public function courses()
    {
        return $this->belongsTo(App\Course::class);
    }

    public function professors()
    {
        return $this->belongsToMany(App\Professor::class);
    }

    public function students()
    {
        return $this->belongsToMany(App\Student::class);
    }


}
