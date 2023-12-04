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
        $permission = Permission::create([
            'name' => $request->module_parent,
            'display_name' => $request->module_parent,
            'parent_id' => 0
        ]);

        foreach ($request->module_child as $value) {
        }
    }
}
