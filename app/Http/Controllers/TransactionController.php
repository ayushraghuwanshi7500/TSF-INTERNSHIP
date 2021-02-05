<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\makeTransaction;
use App\Models\createUser;
use Illuminate\Support\Facades\DB; 

class TransactionController extends Controller
{
    //
    function show(){
        $data=makeTransaction::all();
        return view('transactionhistory',['transactions'=>$data]);
    }
    function save(Request $req)
    {
        
        $user=DB::table('users')->where('username',$req->sender)->first();
        $ruser=DB::table('users')->where('username',$req->reciver)->first();
        echo createUser::where('username',$req->sender)
        ->update(['balance'=>$user->balance - $req->amt_transfer]);
        
        echo createUser::where('username',$req->reciver)
        ->update(['balance'=>$ruser->balance + $req->amt_transfer]);
        
        
        $transactions= new makeTransaction;
        $transactions->sender=$req->sender;
        $transactions->reciver=$req->reciver;
        $transactions->amt_transfer=$req->amt_transfer;
        $transactions->save();
        return redirect('/transactionHistory');
        // return $req->input();

    }
}
