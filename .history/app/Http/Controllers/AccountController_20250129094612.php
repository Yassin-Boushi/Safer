<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AccountController extends Controller
{

    public function login (Request $request){
        $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
    ]);
    
    return   Auth::attempt(['email'=>$request->email,'password'=>$request->password]);
    //     return redirect('flights');
//     return redirect('login');
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
