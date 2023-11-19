<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $data = Category::all();
        // foreach ($data as $value) {
        //     if ($value['parent_id'] == 0) {
        //         echo "<option value='$value->id'>$value->name</option>";
        //         foreach ($data as $value2) {
        //             if ($value2['parent_id'] == $value['id']) {
        //                 echo "<option value='$value2->id'>--$value2->name</option>";
        //                 foreach ($data as $value3) {
        //                     if ($value3['parent_id'] == $value2['id']) {
        //                         echo "<option value='$value3->id'>----$value3->name</option>";
        //                     }
        //                 }
        //             }
        //         }
        //     }
        // }
        // return view('category.add');
    }

    function categoryRecursive($id)
    {
        $data = Category::all();
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                echo "<option>--$value->name</option>";
                $this->categoryRecursive($value->id);
            }
        }
    }
    public function index()
    {
        return view('category.index');
    }
}
