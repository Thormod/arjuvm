<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExchangeList;

class ExchangeListController extends Controller
{
    public function index()
    {
        $exchangeListItems = ExchangeList::all();

        return view('exchange_list', compact('exchangeListItems'));
    }
}
