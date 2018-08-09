<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Http\Request;

use App\Exercise;
use App\WorkoutPlan;
class ExerciseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exercises.create');
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
            'video_url' => 'required',
            'image_url' => 'required',
            'description' => 'required',
            'sets' => 'required',
            'reps' => 'required',
            'rest' => 'required'
        ]);

        $exercise = new Exercise;
        $exercise->name = $request->get('name');
        $exercise->video_url = $request->get('video_url');
        $exercise->description = $request->get('description');
        $exercise->sets = $request->get('sets');
        $exercise->reps = $request->get('reps');
        $exercise->rest = $request->get('rest');
        if ($request->has('image_url')) {
            $imageName =$request->file('image_url')->getClientOriginalName().'_exercise'.time().'.'.request()->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('exercises',$imageName);
            $exercise->image_url = '/storage/exercises/'.$imageName;
        }
        $exercise->save();
        
        return redirect('/admin/exercises/create')
                ->with('success', 'Ejercicio creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $exercise = Exercise::find($id);
        
        return view('admin.exercises.show', compact('exercise'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $exercise = Exercise::find($id);

        return view('admin.exercises.edit', compact('exercise'));
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
            'video_url' => 'required',
            'image_url' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
            'sets' => 'required',
            'reps' => 'required',
            'rest' => 'required'
        ]);
        
        $exercise = Exercise::find($id);
        $exercise->name = $request->get('name');
        $exercise->video_url = $request->get('video_url');
        $exercise->description = $request->get('description');
        $exercise->sets = $request->get('sets');
        $exercise->reps = $request->get('reps');
        $exercise->rest = $request->get('rest');
        if ($request->has('image_url')) {
            $imageName =$request->file('image_url')->getClientOriginalName().'_exercise'.time().'.'.request()->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('exercises',$imageName);
            $exercise->image_url = '/storage/exercises/'.$imageName;
        }
        $exercise->save();
        
        return back()
                ->with('success', 'Ejercicio actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = Exercise::find($id);
        $exercise->delete();
        $workoutPlans = WorkoutPlan::select('id')->where('exercise_id', '=', $id)->get();
        WorkoutPlan::whereIn('id',$workoutPlans)->delete();

        return back()
                ->with('success','Ejercicio eliminado correctamente');
    }
}
