<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\stdcontroller;

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
    return view('welcome');
})->name('homepage');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

Route::get('/register', function () {
    return view('register');
})->name('register');

// Route::get('/', [stdcontroller::class , 'home' ])->name('homepage');
// Route::get('/about', [stdcontroller::class , 'about' ])->name('aboutpage');
// Route::get('/contact', [stdcontroller::class , 'contact' ])->name('contactpage');
// Route::get('/gallery', [stdcontroller::class , 'gallery' ])->name('gallerypage');
// Route::get('/register', [stdcontroller::class , 'register_view' ])->name('registerpage');

// Route::POST('/register', [stdcontroller::class , 'register' ]);
// Route::get('/contact', [stdcontroller::class , 'contact' ]);
// Route::get('/aboutpage', [stdcontroller::class , 'aboutpage' ]);
// Route::get('/gallery', [stdcontroller::class , 'gallery' ]);
// Route::get('/', [stdcontroller::class , 'home' ]);