<?php

use App\Livewire\AddTodo;
use App\Livewire\ManageTodo;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

Route::get('/manage-todo',ManageTodo::class)->name('manage-todo');
Route::get('/add-todo',AddTodo::class)->name('add-todo');

require __DIR__.'/auth.php';
