<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create()
    {
        $data = Category::all();
        foreach ($data as $value) {
            if($value['parent_id'])
        }
        // return view('category.add');
    }
    public function index()
    {
        return view('category.index');
    }
}
