<?php

namespace App\Http\Controllers;

use App\Components\Recursive;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    private $category;
    public function __construct()
    {
        $this->category = new Recursive();
    }
    }
    public function index()
    {
        return view('admin.product.index');
    }
    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
        return view('admin.product.add', compact('htmlOption'));
    }
    public function getCategory($parentId)
    {
        $data = $this->category::all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }
}
