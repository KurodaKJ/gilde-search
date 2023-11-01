<?php

use Illuminate\Support\Facades\Route;

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





Route::get('/', function () {
    return view('search');
})->name('search');

Route::get('/test', function () {
    return 'Test route is working!';
});

Route::get('/results', 'App\Http\Controllers\SearchController@search')->name('search.results');

Route::get('/crawl', 'App\Http\Controllers\WebCrawlerController@crawl');

Route::get('/crawl/{url}', 'App\Http\Controllers\WebCrawlerController@crawl');

