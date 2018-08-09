<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 
        'email', 
        'password', 
        'phone', 
        'nutritional_plan_id', 
        'gender',
        'birthdate'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function trainingPlan()
    {
        return $this->hasMany(TrainingPlan::class);
    }

    public function orders()
    {
        return $this->hasMany(Orders::class);
    }

    public function nutritionalPlan()
    {
        return $this->hasMany(NutritionalPlan::class);
    }

    public function isAdmin()
    {
        return $this->admin ? true : false;
    }
}
