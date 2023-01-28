<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Service\Interface\LoginServiceInterface;
use Illuminate\Http\Request;

class LoginController extends Controller
{

    public function __construct(LoginServiceInterface $loginService)
    {
        $this->loginService = $loginService;
    }
    public function login(){
       return  $this->loginService->login();
    }

    public function check_login(Request $req)
    {
        return $this->loginService->login_check($req);
    }
}
