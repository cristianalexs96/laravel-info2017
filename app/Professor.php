<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{
    protected $table = 'professors';

    public function modules(){

        return $this->belongsToMany(Module::class);

    }

    public function courses()
    {
        return $this->belongsToMany(Course::class);
    }

}
