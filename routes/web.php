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

Route::get('/movies', function () {
    $movies = DB::table('media')
        ->join('type', 'media.type', '=', 'type.id')
        ->select('media.*', 'type.name')
        ->get();
    return $movies;


//    return view('movies');
});

Route::get('/movie/{id}', function () {


});
