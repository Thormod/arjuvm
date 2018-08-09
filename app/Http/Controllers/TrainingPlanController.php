<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrainingPlan;
use App\TrainingPlanDetail;
use App\Orders;
use App\Workout;
class TrainingPlanController extends Controller
{   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
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
        return view('trainingPlan.dashboard', compact('trainingPlan', 'details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.trainingPlan.create');        
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
            'price' => 'required',
            'image_url' => 'required',
            'video_url' => 'required',
            'description' => 'required',
            'short_description' => 'required'
        ]);

        $trainingPlan = new TrainingPlan;
        $trainingPlan->name = $request->get('name');
        $trainingPlan->price = $request->get('price');
        $trainingPlan->video_url = $request->get('video_url');
        $trainingPlan->description = $request->get('description');
        $trainingPlan->short_description = $request->get('short_description');
        $trainingPlan->discount = $request->get('discount');
        if ($request->has('image_url')) {
            $imageName =$request->file('image_url')->getClientOriginalName().'_trainingPlan'.time().'.'.request()->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('exercises',$imageName);
            $trainingPlan->image_url = '/storage/trainingPlan/'.$imageName;
        }
        $trainingPlan->save();
        
        return redirect('/admin/trainingPlan/create')
                ->with('success', 'Plan de entrenamiento creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trainingPlan = TrainingPlan::find($id);
        
        return view('admin.trainingPlan.show', compact('trainingPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trainingPlan = TrainingPlan::find($id);
        
        return view('admin.trainingPlan.edit', compact('trainingPlan'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function editWorkout($id)
    {
        $trainingPlan = TrainingPlan::find($id);
        $workouts = Workout::all();
        $trainingPlanDetail = TrainingPlanDetail::where('training_plan_id', '=', $id)->get();     
        return view('admin.trainingPlan.edit_workout', compact('trainingPlan', 'trainingPlanDetail', 'workouts'));
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
            'price' => 'required',
            'video_url' => 'required',
            'description' => 'required',
            'short_description' => 'required'
        ]);

        $trainingPlan = TrainingPlan::find($id);
        $trainingPlan->name = $request->get('name');
        $trainingPlan->price = $request->get('price');
        $trainingPlan->video_url = $request->get('video_url');
        $trainingPlan->description = $request->get('description');
        $trainingPlan->short_description = $request->get('short_description');
        $trainingPlan->discount = $request->get('discount');
        if ($request->has('image_url')) {
            $imageName =$request->file('image_url')->getClientOriginalName().'_trainingPlan'.time().'.'.request()->image_url->getClientOriginalExtension();
            $request->image_url->storeAs('trainingPlan',$imageName);
            $trainingPlan->image_url = '/storage/trainingPlan/'.$imageName;
        }
        $trainingPlan->save();
        
        return back()
            ->with('success', 'Plan de entrenamiento actualizado correctamente');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateWorkout(Request $request, $id)
    {
        $request->validate([
            'workout_id' => 'required',
            'day' => 'required'
        ]);

        $details =  new TrainingPlanDetail;
        $details->workout_id = $request->get('workout_id');
        $details->day = $request->get('day');
        $details->training_plan_id = $id;
        $details->save();
        
        return back()
                ->with('success', 'Plan de Entrenamiento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trainingPlan = TrainingPlan::find($id);
        $trainingPlan->delete();
        $details = TrainingPlanDetail::select('id')->where('training_plan_id', '=', $id)->get();
        TrainingPlanDetail::whereIn('id',$details)->delete();
        $orders = Orders::select('id')->where('training_plan_id', '=', $id)->get();
        Orders::whereIn('id',$orders)->delete();

        return back()
                ->with('success','Plan de Entrenamiento eliminado correctamente');
    }

     /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroyWorkout($id)
    {
        $details = TrainingPlanDetail::find($id);
        $details->delete();

        return back()
                ->with('success','Workout eliminado correctamente');
    }
}
