<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    private $role;
    private $user;
    public function __construct(User $user,Role $role)
    {
        $this->user = $user;
    }

    public function index()
    {
        $users = $this->user->latest()->cursorPaginate(10);
        return view('admin.user.index', compact('users'));
    }

    public function create()
    {
        $roles = 
        return view('admin.user.add');
    }
}
