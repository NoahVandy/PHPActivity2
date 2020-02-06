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
    return view('login');
});

Route::get('/whoami', function () {
    return view('WhoAmI');
});

Route::get('/whoami', function () {
    return view('test');
});

Route::post('/dologin', 'TestController@onLogin');

Route::get('/login', function () {
    return view('login');
});

// =============== login2

Route::get('/login2', function () {
    return view('login');
});

Route::post('/dologin2', 'Login2Controller@onLogin');

Route::get('/loginFailed', function () {
    return view('loginFailed');
});

// ================= login 3

Route::post('/dologin3', 'Login3Controller@onLogin');

Route::get('/login3', function () {
    return view('login3');
});

