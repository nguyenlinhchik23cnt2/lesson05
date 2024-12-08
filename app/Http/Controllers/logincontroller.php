<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logincontroller extends Controller
{
    public function index()
    {
        return view('login');

    }
    public function loginsubmit(Request $request)
    {
        $res=$request->all();
        return $res;
    }
}
