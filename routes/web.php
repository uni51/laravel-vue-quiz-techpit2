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
    return view('index');
});
Route::get('/quiz', function () {
    return view('quiz.index');
});
Route::get('/mypage', function () {
    return view('mypage.index');
});
Route::get('/login', function () {
    return view('auth.login.index');
});
Route::get('/register', function () {
    return view('auth.register.index');
});

Route::post('/register', 'Auth\RegisterController@register');
Route::post('/login', 'Auth\LoginController@login');
Route::post('/logout', 'Auth\LoginController@logout');
Route::post('/insertRanking', 'Web\RankingController@insertRanking');
