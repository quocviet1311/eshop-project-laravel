<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddSettingRequest;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    private
public function __
    public function index()
    {
        return view('admin.setting.index');
    }

    public function create()
    {
        return view('admin.setting.add');
    }

    public function store(AddSettingRequest $request)
    {
        dd('store');
    }
}
