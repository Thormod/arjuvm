<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Workout;
use App\Exercise;
use App\WorkoutPlan;
use App\TrainingPlanDetail;

class WorkoutController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index($id)
    {
        $workout = Workout::find($id);  
        $exercises = array();
        foreach($workout->details as $detail) {
            $exercises[] =  Exercise::find($detail->exercise_id);
        }

        return view('workout.index', compact('workout', 'exercises'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.workouts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $workout = new Workout;
        $workout->name = $request->get('name');
        $workout->description = $request->get('description');
        $workout->save();
        
        return redirect('/admin/workout/create')
                ->with('success', 'Workout creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $workout = Workout::find($id);

        return view('admin.workouts.show', compact('workout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $workout = Workout::find($id);

        return view('admin.workouts.edit', compact('workout'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editExercises($id)
    {
        $workout = Workout::find($id);
        $exercises = Exercise::all();
        $workoutPlans = WorkoutPlan::where('workout_id', '=', $id)->get();     
        return view('admin.workouts.edit_exercises', compact('workout', 'workoutPlans', 'exercises'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $workout = Workout::find($id);
        $workout->name = $request->get('name');
        $workout->description = $request->get('description');
        $workout->save();
        
        return back()
                ->with('success', 'Workout actualizado correctamente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateExercises(Request $request, $id)
    {
        $request->validate([
            'exercise_id' => 'required',
        ]);

        $workoutPlan =  new WorkoutPlan;
        $workoutPlan->exercise_id = $request->get('exercise_id');
        $workoutPlan->workout_id = $id;
        $workoutPlan->save();
        
        return back()
                ->with('success', 'Workout actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $workout = Workout::find($id);
        $workout->delete();
        $workoutPlans = WorkoutPlan::select('id')->where('workout_id', '=', $id)->get();
        WorkoutPlan::whereIn('id',$workoutPlans)->delete();
        $trainingPlanDetail = TrainingPlanDetail::select('id')->where('workout_id', '=', $id)->get();
        TrainingPlanDetail::whereIn('id',$trainingPlanDetail)->delete();

        return back()
                ->with('success','Workout eliminado correctamente');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyExercises($id)
    {
        $workoutPlan = WorkoutPlan::find($id);
        $workoutPlan->delete();

        return back()
                ->with('success','Ejercicio eliminado correctamente');
    }
}
