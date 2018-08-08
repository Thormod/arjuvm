<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\TrainingPlan;
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
