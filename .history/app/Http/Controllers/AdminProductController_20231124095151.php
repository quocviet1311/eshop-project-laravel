<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        return view('admin.product.create');
    }
}
