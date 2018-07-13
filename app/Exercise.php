<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    // Table name
    protected $table = 'exercise';

    public function workouts()
    {
        return $this->belongsToMany(Workout::class);
    }
}
