<?php

namespace App\Http\Controllers;

use App\Http\Requests\SliderAddRequest;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    private $slider;
    public function __construct(Slider $slider)
    {
    }
    public function index()
    {
        return view('admin.slider.index');
    }
    public function create()
    {
        return view('admin.slider.add');
    }

    public function store(SliderAddRequest $request)
    {
    }
}
