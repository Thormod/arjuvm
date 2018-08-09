<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\NutritionalPlan;
use App\TrainingPlan;
use App\User;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        
        return view('admin.users.show', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.users.create');
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
            'phone' => 'required',
            'email' => 'required',
            'password' => 'required',
            'gender' => 'required',
            'birthdate' => 'required'

        ]);

        $nutritionalPlan = new NutritionalPlan;
        $nutritionalPlan->save();

        $user = new User;
        $user->name = $request->get('name');
        $user->phone = $request->get('phone');
        $user->email = $request->get('email');
        $user->password = bcrypt($request->get('password'));
        $user->nutritional_plan_id = $nutritionalPlan->id;
        $user->gender = $request->get('gender');
        $user->admin = $request->get('admin');
        $user->birthdate = $request->get('birthdate');
        $user->save();
        
        return redirect('/admin/users/create')
                ->with('success', 'Usuario creado correctamente');
    }

    /*
    * Controller used to return the -profile- view with needed data  
    */   
    public function profile($id)
    {
        $user = Auth::user();
        $nutritionalPlan = NutritionalPlan::find($user->nutritional_plan_id);
        $trainingPlans = array();
        foreach($user->orders as $order){
            $trainingPlans[] =  TrainingPlan::find($order->training_plan_id);
        }
            
        return view('user.profile', compact('user', 'nutritionalPlan', 'trainingPlans'));
    }

    /*
    * Controller used to return the -edit_profile- view with needed data  
    */ 
    public function editProfile($id)
    {
        $user = Auth::user();
        $nutritionalPlan = NutritionalPlan::find($user->nutritional_plan_id);      
        return view('user.edit_profile', compact('user', 'nutritionalPlan'));
    }

    /*
    * Controller used to return the -edit_profile- view with needed data  
    */ 
    public function editPlan($id)
    {
        $user = User::find($id);
        $nutritionalPlan = NutritionalPlan::find($user->nutritional_plan_id);      
        return view('admin.users.edit', compact('user', 'nutritionalPlan'));
    }

    /*
    * Controller used to update the user plan
    */ 
    public function updatePlan(Request $request, $id)
    {
        $request->validate([
            'actual_weight' => 'required',
            'target_calories' => 'required',
            'target_weight' => 'required',
            'carbohydrate' => 'required',
            'protein' => 'required',
            'fat' => 'required',
        ]);

        $nutritionalPlan = NutritionalPlan::find($id);
        $nutritionalPlan->target_calories = $request->target_calories;
        $nutritionalPlan->actual_weight = $request->actual_weight;   
        $nutritionalPlan->target_weight = $request->target_weight;   
        $nutritionalPlan->carbohydrate = $request->carbohydrate;       
        $nutritionalPlan->protein = $request->protein;       
        $nutritionalPlan->fat = $request->fat;       
        $nutritionalPlan->save();

        return back()
            ->with('success','Plan de nutricional actualizado');
    }

    /*
    * Controller used to update the user role
    */ 
    public function updateRole(Request $request, $id)
    {
        $request->validate([
            'admin' => 'required',
        ]);

        $user = User::find($id);
        $user->admin = $request->admin;
        $user->save();

        return back()
            ->with('success','Rol de usuario actualizado');
    }

    /*
    * Controller used to update the user profile
    */ 
    public function updateProfile(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'actual_weight' => 'required',
            'avatar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $user = Auth::user();
        if ($request->has('avatar')) {
            $avatarName = $user->id.'_avatar'.time().'.'.request()->avatar->getClientOriginalExtension();
            $request->avatar->storeAs('avatars',$avatarName);
            $user->avatar_url = '/storage/avatars/'.$avatarName;
        }
        $user->phone = $request->phone;
        $user->save();
        $nutritionalPlan = NutritionalPlan::find($user->nutritional_plan_id);
        $nutritionalPlan->actual_weight = $request->actual_weight;
        $nutritionalPlan->save();

        return back()
            ->with('success','Has actualizado correctamente tu perfil.');
    }
}
