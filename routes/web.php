<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::any('/{any}', function (Request $request) {
    return view('welcome');
})->where('any' , '.*');



