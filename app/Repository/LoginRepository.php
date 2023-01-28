<?php

namespace App\Repository;

use App\Repository\Interface\LoginInterface;
use Illuminate\Http\Request;

class LoginRepository implements LoginInterface{

    function login()
    {
        if(auth()->check()){
            return redirect()->to('home');
        }
        return redirect()->route('login');
    }

    function login_check(Request $req)
    {
        $remember = $req->has('remember_me') ? true : false;
        if(auth()->attempt([
            "email" => $req->email,
            "password" => $req->password
        ],$remember)){
            return redirect()->route('home');
        }else{
            return redirect()->route('login');
        }
    }
}
