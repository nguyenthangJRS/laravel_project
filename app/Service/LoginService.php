<?php

namespace App\Service;

use App\Repository\Interface\LoginInterface;
use App\Service\Interface\LoginServiceInterface;
use Illuminate\Http\Request;

class LoginService implements LoginServiceInterface{

    public function __construct(LoginInterface $login)
    {
        $this->login = $login;
    }
    function login_check(Request $req)
    {
        return $this->login->login_check($req);
    }

    function login()
    {
        return $this->login->login();
    }
}
