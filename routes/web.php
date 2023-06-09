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

Route::get('/', function () {
    return view('welcome');
});

//Show all listings
Route::get('/{property_type}/{listing-type}/', function() {
    return view('welcome');
});

//Show single Listing
Route::get('/listing/{slug}/{id}', function() {
    return view('welcome');
});

//User Login
Route::get('/login', function() {
    return view('welcome');
});

//User account creation
Route::get('/register', function() {
    return view('welcome');
});


//User saved listings
Route::get('/account/saved', function() {
    return view('welcome');
});

//User show status
Route::get('/account/show-status', function() {
    return view('welcome');
});