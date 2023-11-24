<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenusRecursive;

class MenuController extends Controller
{
    private $menusRecursive;
    public function __construct(MenusRecursive $menusRecursive)
    {
        $this->menusRecursive = $menusRecursive;
    }
    public function index()
    {
        return view('menus.index');
    }
    public function create()
    {
        $test = $this->menusRecursive->menusRecursiveAdd();
        dd($test);
        return view('menus.add');
    }
}
