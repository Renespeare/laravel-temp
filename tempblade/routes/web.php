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

    // Route::get('/', function () {
    //     return view('welcome');
    // });

Route::get('/', function () {
    return view('adminlte.master');
});

Route::get('/table', function () {
    return view('tables.table');
});

Route::get('/data-tables', function () {
    return view('tables.data-table');
});
