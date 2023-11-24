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
            $this->html .= '<option value="' . $dataItem->id . '">' . $subMark . $dataItem->name . '</option>';
            $this->menusRecursiveAdd($dataItem->id, $subMark . '--');
        }
        return $this->html;
    }
    public function menusRecursiveEdit($parentIdEdit, $parentId = 0, $subMark = '')
    {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $dataItem) {
            if ($parentIdEdit == $dataItem->id) {
                $this->html .= '<option value="' . $dataItem->id . '">' . $subMark . $dataItem->name . '</option>';
            } else {
            }
            $this->menusRecursiveEdit($dataItem->id, $subMark . '--');
        }
        return $this->html;
    }
}
