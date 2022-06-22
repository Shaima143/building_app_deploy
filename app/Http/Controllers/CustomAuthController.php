<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\User;
use Auth;

class CustomAuthController extends Controller
{
    public function login(){

        $user = User::find(2);

        Auth::login($user);

        return redirect('/services');
    }

    public function CustomLogin($id){

        #First way to check if user is not found:
        //$user = User::find($id);
        // if(! $user){
        //     Auth::logout();
        //     return redirect('login');
        // }

        # second way to check if user is not found(will show error 404):
        $user = User::findOrFail($id);

        Auth::login($user);

        return redirect('/services');
    }
}
