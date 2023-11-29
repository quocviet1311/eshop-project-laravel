<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Trong LoginController.php

    use Illuminate\Support\Facades\Auth;

    public function logout()
    {
        Auth::logout();

        return redirect()->route('login');
    }
}
