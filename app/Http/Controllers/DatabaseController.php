<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\createUser;

class DatabaseController extends Controller
{
    //
    function save(Request $req)
    {
        
        $users= new createUser;
        $users->username=$req->username;
        $users->email=$req->email;
        $users->balance=$req->balance;
        $users->save();
        return redirect('/createUser');

    }
}
