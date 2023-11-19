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
    public function categoryRecursive($id = 0, $text = " ")
    {
        $data = Category::all();
        foreach ($this->data as $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .=  "<option>" . $text . $value->name . "</option>";
                $this->categoryRecursive($value->id, $text . '-');
            }
        }
        return $this->htmlSelect;
    }
}
