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

// admin
Route::prefix('admin')->group(function(){
    Route::get('/', livewire\Admin\Dashboard::class)->name("admin");
    Route::get('/evoting', livewire\Admin\Evoting::class)->name("evoting-admin");
    Route::get('/event', livewire\Admin\Event::class)->name("event-admin");
    Route::get('/profile', livewire\Admin\Profile::class)->name("profile-admin");
    Route::get('/evoting/{idVote}', livewire\Admin\Candidate::class);
});


// user
Route::get('/dashboard', livewire\Dashboard::class)->name("dashboard");
Route::get('/event', livewire\Event::class)->name("event");
Route::get('/evoting', livewire\EVoting::class)->name('e-voting');
Route::get('/profile', livewire\Profile::class)->name('profile');
Route::get('/account', livewire\Account::class)->name('account');
Route::get('/evoting/{idVote}', livewire\Candidate::class)->name('account');
Route::get('/result/{idVoting}', livewire\Candidate::class)->name('result');