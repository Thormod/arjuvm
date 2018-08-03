<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrainingPlan;
use App\Workout;
class TrainingPlanController extends Controller
{
    public function index()
    {
        $trainingPlans = TrainingPlan::all();

        return view('trainingPlan.index', compact('trainingPlans'));
    }

    public function detail($id)
    {
        $trainingPlan = TrainingPlan::find($id);
        
        return view('trainingPlan.detail', compact('trainingPlan'));
    }

    public function dashboard($id)
    {
        $trainingPlan = TrainingPlan::find($id);
        $details = $trainingPlan->details;
        // $workouts = array();
        // foreach($trainingPlan->details as $detail){
        //     $workouts =  Workout::find($detail->workout_id);
        // }
        return view('trainingPlan.dashboard', compact('trainingPlan', 'details'));
    }
}
