<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendController extends Controller
{


    public function index()
    {
        return  view('frontend.home');
    }


    public function TransactionStatus($reference){
        return view('frontend.transactionmessage');
    }
}
