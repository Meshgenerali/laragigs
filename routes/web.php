<?php

use App\Models\Listing;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

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

Route::get('/', [ListingController::class, 'index']);

// show create form

Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');


// store listing data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

// showedit form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

// update listing

Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

// delete listing route
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// manage listing route
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');
// single listing route

Route::get('/listings/{listing}', [ListingController::class, 'show']);

// show register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// create new user 
Route::post('/users', [UserController::class, 'register']);

// log user out

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// route to show login form

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// route to loginthe user

Route::post('/users/authenticate', [UserController::class, 'authenticate']);



 

