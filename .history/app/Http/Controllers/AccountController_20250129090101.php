<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\returnSelf;

class AccountController extends Controller
{

    public function login (Request $request){
        try{
       $result= $request->validate([
            'email'=>['required', 'email'],
            'password'=>'required'
    ]);
    // return Auth::attempt($result); 
    if(Auth::attempt($result))
    return 'hiii';
return 'a,,';
    // return redirect('flights');
    // return redirect('login');
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
