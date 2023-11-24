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
        $menus = $this->menu->cursorPaginate(8);
        return view('menus.index', compact('menus'));
    }
    public function create()
    {
        $optionSelect = $this->menusRecursive->menusRecursiveAdd();
        return view('menus.add', compact('optionSelect'));
    }
    public function store(Request $request)
    {
        // dd($request);
        $this->menu->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => \Illuminate\Support\Str::slug($request->name)
        ]);
        return redirect()->route('menus.index');
    }
    public function edit($id, Request $request)
    {
        $menuEdit = $this->menu->find($id);
        $optionSelect = $this->menusRecursive->menusRecursiveEdit($menuEdit->parent_id);
        return view('menus.edit', compact('optionSelect', 'menuEdit'));
    }
    public function update($id, Request $request)
    {
        $this->menu->find($id)->update([
            'name' => $request->name,
            'parent_id' =>$request->
        ]);
    }
}
