<?php

use App\Livewire\OpportunityBoard;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/opportunities', OpportunityBoard::class)->name('opportunities.index');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
