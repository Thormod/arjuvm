<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workout;
use App\Exercise;

class WorkoutController extends Controller
{
    public function index($id)
    {
        $workout = Workout::find($id);  
        $exercises = array();
        foreach($workout->details as $detail) {
            $exercises[] =  Exercise::find($detail->exercise_id);
        }

        return view('workout.index', compact('workout', 'exercises'));
    }
}
