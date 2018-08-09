<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Orders;
use App\Exercise;
use App\ExchangeList;
use App\Workout;
use App\TrainingPlan;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::all()->count();
        $ordersCount = Orders::all()->count();
        return view('admin.index', compact('usersCount', 'ordersCount'));
    }

    public function users()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function exercises()
    {
        $exercises = Exercise::all();
        return view('admin.exercises.index', compact('exercises'));
    }

    public function exchangeList()
    {
        $exchangeList = ExchangeList::all();
        return view('admin.exchangeList.index', compact('exchangeList'));
    }

    public function workouts()
    {
        $workouts = Workout::all();
        return view('admin.workouts.index', compact('workouts'));
    }

    public function trainingPlan()
    {
        $trainingPlans = TrainingPlan::all();
        return view('admin.trainingPlan.index', compact('trainingPlans'));
    }
}
