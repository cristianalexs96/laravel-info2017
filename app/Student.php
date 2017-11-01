<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';

    public function modules()
    {
        return $this->belongsToMany(App\Module);
    }

    public function courses()
    {
        return $this->belongsToMany('App\Course');
    }
}
