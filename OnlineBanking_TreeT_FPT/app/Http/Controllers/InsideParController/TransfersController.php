<?php

namespace App\Http\Controllers\InsideParController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TransfersController extends Controller
{
    /**
     * The function displays the transfer page
     */
    public function getTransfer()
    {
        return view('PagePersonal.transfers');
    }

    /**
     * The function displays the Internal Transfer page
     */
    public function getInternalTransfer()
    {
        return view('PagePersonal.internal_transfers');
    }

    /**
     * The function displays the External Transfer page
     */
    public function getExternalTransfer()
    {
        return view('PagePersonal.external_transfers');
    }

    /**
     * The function displays the Confirm Information page
     */
    public function getConfirmInformation()
    {
        return view('PagePersonal.confirm_information');
    }

    /**
     * The function displays the Confirm Transfer page
     */
    public function getConfirmTransfer()
    {
        return view('PagePersonal.confirm_transfers');
    }

    /**
     * The function displays the Success page
     */
    public function getSuccess()
    {
        return view('PagePersonal.success');
    }

}
