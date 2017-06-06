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

Route::get('/games', function () {

    $view = view('document');
    return $view;
});

Route::post('/games', function () {
    return 'This is the list of games when accessed with POST';
});

Route::any('/games', function () {
    $view = view('document');
    return $view;
});

Route::get('/authors', function () {


    return redirect('/');
});


route::get('/404', function()
{
    $response = response('Hello World', 200);
    $response -> header('Content-type', 'application/json');

    return $response;
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
