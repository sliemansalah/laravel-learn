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
    return view('index');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/json', function () {
    return ['foo' => 'bar'];
});

//Route::get('/test', function () {
//    $name = request('name'); // http://localhost:8000/test?name=slieman
//    return view('test', [
//        'name' => $name
//    ]);
//});
Route::get('/test', function () {
    return view('test', [
        'name' => request('name')
    ]);
});


// http://localhost:8000/test?name=%3Cscript%3Ealert(%22hello%22)%3C/script%3E

Route::get('/getName', function () { // http://localhost:8000/getName?name=slieman
    $name = request('name');
    return $name;
});
