<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Error;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    //
    function list(){
        return User::all();
    }
    function findById(User $user){
        return User::find($user);
    }
    function userTask(User $user){
        
        return User::with('tasks')->get()->find($user)->tasks;
    
    }
    function addUser(Request $request){
       $user=new User;
       $user->full_name=$request->full_name;
       $user->email =$request->email;
       $user->password=$request->password;
       $res= $user->save();   
       if($res){
        return [['result'=>'success']];
       }else{
        return [['result'=>'no success']];
       }
    }
    function update1(Request $request,User $user){
        //dd($request->full_name);
       $user->full_name=$request->full_name;
       $user->password=$request->password;
       $user->email=$request->email;
       $res=$user->save();
        if($res){
            return [['result'=>'updated']];

        }else{
            return [['result'=>'cannot updated']];
        }
    }
}
