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


Auth::routes();

Route::resource('api/section', 'api\SectionController');
Route::resource('api/messages', 'api\MessageController');
Route::get('api/company', 'api\CompanyController@update');

Route::get('api/excel', 'api\MessageController@exportExcel');

Route::get('api/admin', 'api\AdminController@index');
Route::get('api/app', 'api\AppController@index');

Route::get('/admin', function () {
    return view('admin');
})->middleware('auth')->name('auth');

Route::get('/admin/{pages}/{section}', function () {
    return view('admin');
})->middleware('auth');

Route::get('/admin/{pages}', function () {
    return view('admin');
})->middleware('auth');

Route::get('/admin-login', function () {
    return view('app');
})->name('admin-login')->middleware('guest');

Route::get('/{vue_capture?}', function () {
    return view('app');
})->where('vue_capture', '[\/\w\.-]*');





