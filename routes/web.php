<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Artisan;


Route::group(['prefix' => '{locale?}', 'middleware' => 'web'], function () {
    // Home route
    Route::get('/', function () {
        return view('welcome');
    })->name('home');

    // Other routes within the locale-prefixed group
    Route::get('/contact/{next}', [\App\Http\Controllers\Homecontroller::class, 'contact'])->name('contact');

    Route::get('/product', function () { return view('product'); })->name('product');

    Route::get('/report', function () { return view('report'); })->name('report');

    Route::get('/set-currency', function () { return view('set_currency');})->name('set-currency');
    
   

});

Route::get('set-language/{lang}', [\App\Http\Controllers\Homecontroller::class, 'change'])->name('set-language');
