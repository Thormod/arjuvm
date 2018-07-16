<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    // Table name
    protected $table = 'workout';
     
    public function exercises()
    {
        return $this->belongsToMany(Exercise::class);
    }
}
