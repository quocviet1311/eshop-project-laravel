<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    private $role;
    private $permission;
    public function __construct(Role $role)
    {
        $this->role = $role;
    }
    public function index()
    {
        $roles = $this->role->latest()->cursorPaginate(10);
        return view('admin.role.index', compact('roles'));
    }

    public function create()
    {
        $permissions = $
        return view('admin.role.add');
    }
}
