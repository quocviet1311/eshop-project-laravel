<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Components\MenusRecursive;
use App\Models\Menu;

class MenuController extends Controller
{
    private $menusRecursive;
    private $menu;
    public function __construct(MenusRecursive $menusRecursive, Menu $menu)
    {
        $this->menusRecursive = $menusRecursive;
        $this->menu = $menu;
    }
    public function index()
    {
        return view('menus.index');
    }
    public function create()
    {
        $optionSelect = $this->menusRecursive->menusRecursiveAdd();
        return view('menus.add', compact('optionSelect'));
    }
    public function store(Request $request)
    {
        // dd($request);
$this->menu->create()
    }
}
