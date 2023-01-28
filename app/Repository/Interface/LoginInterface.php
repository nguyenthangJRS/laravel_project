<?php

namespace App\Repository\Interface;

use Illuminate\Http\Request;

interface LoginInterface{
    function login_check(Request $req);
    function login();
}
