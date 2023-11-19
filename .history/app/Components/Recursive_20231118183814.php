<?php

namespace App\Components;

class Recursive
{
    public function categoryRecursive($id, $text = " ")
    {
        $data = Category::all();
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                $this->htmlSelect .=  "<option>" . $text . $value->name . "</option>";
                $this->categoryRecursive($value->id, $text . '-');
            }
        }
        return $this->htmlSelect;
    }
}
