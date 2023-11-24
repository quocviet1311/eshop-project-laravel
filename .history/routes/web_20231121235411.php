<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Models\Category;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\AdminController@loginAdmin');
Route::post('/', 'App\Http\Controllers\AdminController@postLogin');

Route::get('/home', function () {
    return view('home');
});

Route::prefix('categories')->group(function () {
    Route::get('/', [
        'as' => 'categories.index',
        'uses' => 'App\Http\Controllers\CategoryController@index'
    ]);
    Route::get('/create', [
        'as' => 'categories.create',
        'uses' => 'App\Http\Controllers\CategoryController@create'
    ]);
    Route::post('/store', [
        'as' => 'categories.store',
        'uses' => 'App\Http\Controllers\CategoryController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'categories.edit',
        'uses' => 'App\Http\Controllers\CategoryController@edit'
    ]);
    Route::post('/update/{id}', [
        'as' => 'categories.update',
        'uses' => 'App\Http\Controllers\CategoryController@update'
    ]);
    Route::get('/delete/{id}', [
        'as' => 'categories.delete',
        'uses' => 'App\Http\Controllers\CategoryController@delete'
    ]);
});

Route::prefix('menus')->group(function () {
    Route::get('/', [
        'as' => 'menus.index',
        'uses' => 'App\Http\Controllers\MenuController@index'
    ]);
    Route::get('/create', [
        'as' => 'menus.create',
        'uses' => 'App\Http\Controllers\MenuController@create'
    ]);
    Route::post('/store', [
        'as' => 'menus.store',
        'uses' => 'App\Http\Controllers\MenuController@store'
    ]);
    Route::get('/edit/{id}', [
        'as' => 'menus.edit',
        'uses' => 'App\Http\Controllers\MenuController@edit'
    ]);
    Route::post('/update/{id}', [
        'as' => 'menus.update',
        'uses' => 'App\Http\Controllers\MenuController@update'
    ]);
    Route::get('/delete/{id}', [
        'as' => 'menus.delete',
        'uses' => 'App\Http\Controllers\MenuController@delete'
    ]);
});
