<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\ShowHomePage;
use App\Livewire\ShowProfile;
use App\Livewire\ShowAbout;

Route::get('/', ShowHomePage::class)->name('home');
Route::get('/profile', ShowProfile::class)->name('profile');
Route::get('/about', ShowAbout::class)->name('about');
