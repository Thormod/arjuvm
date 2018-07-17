<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NutritionalPlan extends Model
{
    // Table name
    protected $table = 'nutritional_plan';

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}
