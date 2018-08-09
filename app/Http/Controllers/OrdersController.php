<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Orders;
use App\User;
use App\TrainingPlan;

class OrdersController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $order = Orders::find($id);
        $user = User::find($order->user_id);
        $trainingPlan = TrainingPlan::find($order->training_plan_id);
        return view('admin.orders.show', compact('order', 'trainingPlan', 'user'));
    }
}
