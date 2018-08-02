<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\NutritionalPlan;
use App\TrainingPlan;

class UserController extends Controller
{
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
