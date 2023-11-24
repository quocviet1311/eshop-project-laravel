<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        $remember = $request->has('remember') ? true : false;
        if (auth()->attempt([
            'email' => $request->email,
            'password' => $request->password
        ], $remember)) {
            return redirect()->('home');
        }
    }
}
