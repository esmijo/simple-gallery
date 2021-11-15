<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@index');
Route::get('/manage', 'PageController@manage');
Route::get('/insert', 'PageController@insert');
Route::post('/insert', 'GalleryController@insert');
Route::get('/live_search', 'GalleryController@live_search');
Route::get('/delete/{id}', 'GalleryController@delete');
Route::get('/update/{id}', 'PageController@update');
Route::post('/update', 'GalleryController@update');