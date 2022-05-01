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


/*
Route::group(['prefix'=> 'user' ], function () {
    //Route/Controller code-practice
    Route::get('/{index}/{name?}', function ($index, $name = "Test") {
        $names = ['Johnny', 'Johnny', 'Yes', 'Papa'];
        return $names[$index]. ' '.$name;
    });

    Route::get('/', function () {
        $names = ['Johnny', 'Johnny', 'Yes', 'Papa'];
        foreach ($names as $name) {
            print($name). '<br>';
        }
    })->name{'userList'};
});

Route::get('/', function () {
    return view('welcome');
});
*/ 



Route::get('posts', function () {
    return view('posts');
});

Route::get('posts/{post}', function ($slug) {

    $post = __DIR__ . "/../resources/posts/{$slug}.html";
    ddd($post);
    if (!file_exists($post)) {
       return redirect('posts');
    }
    return view('post', [
        'post' => $post
    ]);
})->where('post','[A-z_\-]*');



