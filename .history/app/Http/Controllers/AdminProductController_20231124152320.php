<?php

namespace App\Http\Controllers;

use App\Components\Recursive;
use App\Models\Category;
use Illuminate\Http\Request;

class AdminProductController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
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
    public function store(Request $request)
    {
        $fileName  = $request->feature_image_path->$path = $request->file('feature_image_path')->storeAs('products');
    }
}
