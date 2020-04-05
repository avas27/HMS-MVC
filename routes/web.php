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
    return view('welcome');
});

Route::get('middleware', [
    'middleware' => 'role:admin',
    'uses' => 'TestController@index'
]);

Route::resource('restc', 'RestfulController');

Route::get('param/nick', 'ParamController@index')->name('nick');

Route::get('form', function () {
    return view('form');
});

Route::post('/reg', 'FormController@form');

Route::get('/setCookie', 'CookieController@setCookie');

Route::get('/getCookie', 'CookieController@getCookie');

Route::get('view1', function () {
    return view('v1');
});

Route::get('view2', function () {
    return view('v2');
});

Route::get('rr', 'RedirectController@index');

Route::get('redirect/{user}', function () {
    return redirect()->action('RedirectController@index');
});

Route::get('ex', ["as" => "nickname", function () {
    return view('v1');
}]);

Route::get('example', function () {
    return redirect()->route('nickname');
});

Route::get("para/{id}/{course}", "paraController@pass");

Route::get("/kachra", function () {
    echo "ok ji";
})->name('kachraa');

Route::get("/kachra2", function () {
    return redirect()->route('kachraa');
});

Route::get("nav", function () {
    return view("navigation");
});

Route::get("/about", function () {
    return view("about");
});

Route::get("/home", function () {
    return view("home");
});

Route::get("/contact", function () {
    return view("contact");
});

Route::get('/navg', function () {
    return view('nav');
});

Route::resource('my', 'resController');

Route::get('/json', function () {
    return ["name" => "Shyra"];
});

Route::get('/jss', function () {
    $path = storage_path() . "/abc.json";
    $data = json_decode(file_get_contents($path), true);
    print_r($data);
});
