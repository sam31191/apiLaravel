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
    // return view('welcome');
    return \App\Product::all();
});

Route::get('/reset', function () {
    Artisan::call('clear-compiled');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('cache:clear');
    Artisan::call('config:clear');
    Artisan::call('optimize');
    //Artisan::call('config:cache');			
    //Artisan::call('route:cache');			
    //Artisan::call('optimize', ['--force' => true]);
    Artisan::call('storage:link');
    echo "Done";
});
