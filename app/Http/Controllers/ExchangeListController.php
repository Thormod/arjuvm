<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExchangeList;

class ExchangeListController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return \Illuminate\Http\Response
    */
    public function index()
    {
        $exchangeListItems = ExchangeList::all();

        return view('exchange_list', compact('exchangeListItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.exchangeList.create');
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
            'food_name' => 'required',
            'carbohydrate_amount' => 'required',
            'fat_amount' => 'required',
            'protein_amount' => 'required',
            'calorie_amount' => 'required',
            'measure' => 'required',
            'measure_type' => 'required'
        ]);

        $food = new ExchangeList;
        $food->food_name = $request->get('food_name');
        $food->carbohydrate_amount = $request->get('carbohydrate_amount');
        $food->fat_amount = $request->get('fat_amount');
        $food->protein_amount = $request->get('protein_amount');
        $food->calorie_amount = $request->get('calorie_amount');
        $food->measure = $request->get('measure');
        $food->measure_type = $request->get('measure_type');
        $food->save();
        
        return redirect('/admin/exchangeList/create')
                ->with('success', 'Alimento creado correctamente');
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
        $food = ExchangeList::find($id);

        return view('admin.exchangeList.edit', compact('food'));
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
            'food_name' => 'required',
            'carbohydrate_amount' => 'required',
            'fat_amount' => 'required',
            'protein_amount' => 'required',
            'calorie_amount' => 'required',
            'measure' => 'required',
            'measure_type' => 'required'
        ]);

        $food = ExchangeList::find($id);
        $food->food_name = $request->get('food_name');
        $food->carbohydrate_amount = $request->get('carbohydrate_amount');
        $food->fat_amount = $request->get('fat_amount');
        $food->protein_amount = $request->get('protein_amount');
        $food->calorie_amount = $request->get('calorie_amount');
        $food->measure = $request->get('measure');
        $food->measure_type = $request->get('measure_type');
        $food->save();
        
        return back()
                ->with('success', 'Alimento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $exercise = ExchangeList::find($id);
        $exercise->delete();

        return back()
                ->with('success','Alimento eliminado correctamente');
    }
}
