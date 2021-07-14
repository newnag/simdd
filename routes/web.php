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

// หน้าหลัก
Route::get('/', function () {
    return view('pages.home');
});
// หน้ารวมเบอร์
Route::get('/allber', function () {
    return view('pages.allber');
});
// หน้ารวมประมูลเบอร์
Route::get('/allbit', function () {
    return view('pages.allbit');
});

Route::prefix('store')->group(function () {
    Route::get('/', function () {
        return view('pages.store.store');
    });
    Route::get('/instore', function () {
        return view('pages.store.instore');
    });
});