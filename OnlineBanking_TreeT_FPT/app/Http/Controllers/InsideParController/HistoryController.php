<?php

namespace App\Http\Controllers\InsideParController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * The function displays the History page
     */
    public function getHistory()
    {
        return view('PagePersonal.history');
    }

    /**
     * The function displays the History page
     */
    public function getDetailTransfer()
    {
        return view('PagePersonal.detail_transfer');
    }

}
