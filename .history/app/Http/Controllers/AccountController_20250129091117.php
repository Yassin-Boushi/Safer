<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AccountController extends Controller
{

    public function login (Request $request){
        try{
        $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
    ]);
    if(Auth::guard('account')->attempt(['email'=>$request->email,'password'=>$request->password]))
    return redirect('flights');
    return redirect('login');
}
catch(\Exception $e){
    return $e->getMessage();}
    }
    public function logout(){
        try{
                if(Auth()->logout())
                return redirect('flights');
        }
        catch(\Exception $e){
            return $e->getMessage();
        }
    }
}
