<?php

namespace App\Service\Interface;

use Illuminate\Http\Request;

interface LoginServiceInterface{
    function login_check(Request $req);
    function login();
}
