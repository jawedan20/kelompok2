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
Route::get('/admin', livewire\DashboardAdmin::class)->name("admin");
Route::get('/evoting-admin', livewire\EvotingAdmin::class)->name("evoting-admin");
Route::get('/event-admin', livewire\EventAdmin::class)->name("event-admin");
Route::get('/profile-admin', livewire\ProfileAdmin::class)->name("profile-admin");
Route::get('/evoting-admin/id', livewire\Admin\TableVote::class)->name("id");


// user
Route::get('/dashboard', livewire\Dashboard::class)->name("dashboard");
Route::get('/event', livewire\Event::class)->name("event");
Route::get('/e-voting', livewire\EVoting::class)->name('e-voting');
Route::get('/profile', livewire\Profile::class)->name('profile');
Route::get('/account', livewire\Account::class)->name('account');