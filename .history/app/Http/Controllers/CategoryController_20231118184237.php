<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;

class CategoryController extends Controller
{
    private $htmlSelect;
    public function __construct()
    {
        $this->htmlSelect = '';
    }
    public function create()
    {
        $data = Category::all();
        $recursive = new Recursive($data);
        $htmlOption = $this->categoryRecursive(0);

        return view('category.add', compact('htmlOption'));
    }
    // Ví dụ đệ quy
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
    public function index()
    {
        return view('category.index');
    }
}