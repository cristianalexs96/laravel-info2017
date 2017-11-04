<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $table = 'modules';

    protected $fillable = ['course_id', 'nombre', 'descripcion', 'dias', 'horario'];

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
