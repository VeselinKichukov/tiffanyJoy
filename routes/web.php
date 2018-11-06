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

Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pomorie', function() {
    return view('cities.pomorie');
});

Route::get('/primorsko', function() {
    return view('cities.primorsko');
});

// contact form
Route::post('/', 'ContactController@mailToAdmin');
