<?php

namespace App\Components;

use App\Models\Category;

class Recursive
{
    private $htmlSelect = '';
    private $data;
    public function __construct($data)
    {
        $this->data = $data;
    }
    public function categoryRecursive($parentID, $id = 0, $text = " ")
    {
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .=  "<option value='" . $value->id . "' >" . $text . $value->name . "</option>";
                $this->categoryRecursive($parentID, $value->id, $text . '--');
            }
        }
        return $this->htmlSelect;
    }
}
