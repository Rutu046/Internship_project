<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\leaderController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/botscan', function () {
    return view('layout.index');
});


Route::get('/leadership', function () {
    return view('leadership');
});

Route::get('/editeam', function () {
    return view('edit_team');
});

Route::get('/conference', function () {
    return view('conference');
});

Route::get('/apc', function () {
    return view('apc');
});

Route::get('/journalsubscription', function () {
    return view('journalsubscription');
});
