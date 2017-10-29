<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Module extends Model
{

    protected $table = 'modules';

    public function courses()
    {
        return $this->belongsTo('App\Course');
    }

    public function professors()
    {
        return $this->belongsToMany(App\Professor);
    }

    public function students()
    {
        return $this->belongsToMany(App\Student);
    }


}
