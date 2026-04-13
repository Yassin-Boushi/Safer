<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class AccountController extends Controller
{

    public function login (Request $request){
        try{
        $request->validate([
            'email'=>'required',
            'password'=>'required'
    ]);
    if(Auth::attempt(['email'=>$request->email,'password'=>$request->password]))
    return redirect('flights');
    return view('login');
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
