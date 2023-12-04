<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class AdminPermissionController extends Controller
{
    public function createPermission()
    {
        $tableModule = config('permissions.table_module');
        $tableModuleChildren = config('permissions.module_children');
        return view('admin.permission.add', compact('tableModule', 'tableModuleChildren'));
    }

    public function store(Request $request)
    {
        Permission::create
    }
}
