<?php

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
//    $url = 'storage/json/data.json';
//    $datos = file_get_contents($url);
//    $data = json_decode($datos, true);
//    dd($data);

    $jsonString = file_get_contents(base_path('resources/data.json'));

    $data = json_decode($jsonString, true);
    //dd($data[0]['name']);
    return view('main')->with('data',$data);
});
