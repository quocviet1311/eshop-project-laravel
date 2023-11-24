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
    public function menusRecursiveAdd($parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem) {
            $this->html .= '<option value="' . $dataItem->id . '">' . $dataItem->name . '</option>';
            $this->menusRecursiveAdd($dataItem->id);
        }
        return 
    }
}
