<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    public function createUser()
    {
        return view('createuser');
    }
    public function makeTransaction()
    {
        return view('makeatransaction');
    }
    public function transactionHistory()
    {
        return view('transactionhistory');
    }
}
