<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin()
    {
dd(bscript)
        return view('login');
    }

    public function postLogin(Request $request)
    {
        dd($request->all());
    }
}
