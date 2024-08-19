<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layout.master');
});
Route::get('/', function () {
    return view('include.side');
});
