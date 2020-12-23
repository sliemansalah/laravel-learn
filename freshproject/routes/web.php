<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController;

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


//Route::get('/posts/{post}', function ($post) {
//    $posts= [
//      'my-first-post' => 'Hello, this is my first blog post',
//        'my-second-post' => 'Now I am getting the hang of this blogging'
//    ];
//
////    if(! array_key_exists($post, $posts)) {
////        abort(404, 'Sorry, that post was not found'); // other way
////    }
//
////    if(! array_key_exists($post, $posts)) {
//////       return 'Not found'; // other way
////        return view('welcome');
////    }
//
//
//    return view('post', [
//        'post' => $posts[$post] ?? 'Nothing here yet' //http://localhost:8000/posts/my-first-post
//    ]);
//});


//Route::get('/posts/{post}', 'PostController@show');
//Route::get('/posts/{post}', 'PostController@show'); // in previous verison
Route::get('/posts/{post}', [PostController::class, 'show']); // for now


