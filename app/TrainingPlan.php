<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrainingPlan extends Model
{
    // Table name
    protected $table = 'training_plan';

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function details()
    {
        return $this->hasMany(TrainingPlanDetail::class);
    }
}
