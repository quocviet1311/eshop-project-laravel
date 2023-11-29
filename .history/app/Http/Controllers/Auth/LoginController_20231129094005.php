<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // Trong LoginController.php


    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
