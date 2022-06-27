<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
     $comics_array = config('comics');
    return view('home', compact('comics_array'));
})->name('homepage');

Route::get('/news', function () {

    return view('news'); 
});

Route::get('/homepage/{id}', function($id){
    // dd($id);
    $comics_array = collect(config('comics'));
    $current_comic = $comics_array->where('id', $id)->first();
    $data = [
        'currenrt-comic'=> $current_comic,
        'id'=> $id,
    ];
    // dd($current_comic);
    return view('single-comic', compact('data'));
})->name('single-comic');



// knjonojnonononn