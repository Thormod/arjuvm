<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Orders;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::all()->count();
        $ordersCount = Orders::all()->count();
        // $user = Auth::user();
        // $nutritionalPlan = NutritionalPlan::find($user->nutritional_plan_id);
        // $trainingPlans = array();
        // foreach($user->orders as $order){
        //     $trainingPlans[] =  TrainingPlan::find($order->training_plan_id);
        // }
            
        return view('admin.index', compact('usersCount', 'ordersCount'));
    }
}
