<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makeTransaction;
use App\Models\createUser;

class TransactionController extends Controller
{
    //
    function show(){
        $data=makeTransaction::all();
        return view('transactionhistory',['transactions'=>$data]);
    }
    function save(Request $req)
    {
        // print_r($req->input());
        
        $transactions= new makeTransaction;
        $transactions->sender=$req->sender;
        $transactions->reciver=$req->reciver;
        $transactions->amt_transfer=$req->amt_transfer;
        $transactions->save();
        
        return redirect('/makeTransaction');
        // return $req->input();

    }
}
