<?php

namespace App\Http\Controllers\OutsidePartController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     *  The function displays the login form
     */
    public function getLogin(){
        return view('Account.login');
    }
    /**
     *  The function displays the register form
     */
    public function getRegister(){
        return view('Account.register');
    }
}
