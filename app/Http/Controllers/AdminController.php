<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Orders;
use App\Exercise;
use App\ExchangeList;

class AdminController extends Controller
{
    public function index()
    {
        $usersCount = User::all()->count();
        $ordersCount = Orders::all()->count();
        return view('admin.index', compact('usersCount', 'ordersCount'));
    }

    public function exercises()
    {
        $exercises = Exercise::all();
        return view('admin.exercises.index', compact('exercises'));
    }

    public function ExchangeList()
    {
        $exchangeList = ExchangeList::all();
        return view('admin.exchangeList.index', compact('exchangeList'));
    }
}
