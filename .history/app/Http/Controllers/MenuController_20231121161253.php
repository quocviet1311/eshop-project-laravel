<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenusRecursive;

class MenuController extends Controller
{
    public function __construct(MenusRecursive $menusRecursive)
    {
    }
    public function index()
    {
        return view('menus.index');
    }
    public function create()
    {
        return view('menus.add');
    }
}
