<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrainingPlan;
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
}
