<?php

namespace App\Components;

use App\Models\Menu;

class MenusRecursive
{
    private $html;
    public function __construct()
    {
        $this->html = '';
    }
    public function menusRecursiveAdd($parentId)
    {
        $data = Menu::where('parent_id', $parentId)->get();
    }
}
