<?php

namespace App\Http\Controllers\InsideParController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * The function displays the page List Account
     */
    public function getListAccount()
    {
        return view('PagePersonal.information_accounts');
    }
    /**
     * The function displays the page Detail Account
     */
    public function getDetailAccount($id)
    {
        return view('PagePersonal.detail_account');
    }
}
