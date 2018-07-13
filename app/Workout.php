<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }
}
