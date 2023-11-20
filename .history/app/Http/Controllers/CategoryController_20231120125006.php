<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Components\Recursive;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    private $category;
    public function __construct(Category $category)
    {
        $this->category = $category;
    }
    public function create()
    {
        $htmlOption = $this->getCategory($parentId = '');
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
        $categories = $this->category->latest()->cursorPaginate(5);
        return view('category.index', compact('categories'));
    }
    public function store(Request $request)
    {
        $this->category->create([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => \Illuminate\Support\Str::slug($request->name)

        ]);
        return redirect()->route('categories.index');
    }
    public function edit($id)
    {
        $category = $this->category->find($id);
        $htmlOption = $this->getCategory($category->parent_id);
        return view('category.edit', compact('category', 'htmlOption'));
    }
    public function update($id, Request $request)
    {
        $this->category->find($id)->update([
            'name' => $request->name,
            'parent_id' => $request->parent_id,
            'slug' => \Illuminate\Support\Str::slug($request->name)
        ]);
    }

    public function getCategory($parentId)
    {
        $data = $this->category::all();
        $recursive = new Recursive($data);
        $htmlOption = $recursive->categoryRecursive($parentId);
        return $htmlOption;
    }

    public function delete($id)
    {
    }
}
