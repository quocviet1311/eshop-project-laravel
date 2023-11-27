<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        return view('admin.slider.index');
    }
    public function create()
    {
        return view('admin.slider.add');
    }

    public function store()
    {
        dd('submit form');
    }
}
