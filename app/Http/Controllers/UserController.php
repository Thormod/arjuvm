<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\NutritionalPlan;
use App\TrainingPlan;

class UserController extends Controller
{
    //
    public function profile($id)
    {
        $user = Auth::user();
        $nutritionalPlan = NutritionalPlan::find($user->nutritional_plan_id);
        $trainingPlans = array();
        foreach($user->orders as $order){
            $trainingPlans[] =  TrainingPlan::find($order->training_plan_id);
        }
            
        return view('user.profile', compact('user', 'nutritionalPlan', 'trainingPlans'));
    }
}
