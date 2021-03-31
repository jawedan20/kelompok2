<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire;

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
    return view('home');
});

Auth::routes();

Route::get('/dashboard', livewire\Dashboard::class)->name("dashboard");
Route::get('/event', livewire\Event::class)->name("event");
Route::get('/e-voting', livewire\EVoting::class)->name('e-voting');
Route::get('/profile', livewire\Profile::class)->name('profile');
Route::get('/admin', livewire\AdminPanel::class)->name('admin');