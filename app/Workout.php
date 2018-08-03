<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    // Table name
    protected $table = 'workout';
    
    public function trainingPlans()
    {
        return $this->belongsToMany(TrainingPlan::class);
    }
    
    public function exercises()
    {
        return $this->hasMany(Exercise::class);
    }
    
}
