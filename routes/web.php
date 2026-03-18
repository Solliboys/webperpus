<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Backend\BookController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\UserController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WelcomeController;
Route::get('/', [WelcomeController::class, 'index'])->name('welcome');
Route::get('/frontend', [ProfileController::class, 'showFrontend']);

use App\Models\Book;
use App\Models\User;

Route::prefix('admin')->name('admin.')->middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/', function () {
        $bookCount = Book::count();
        $userCount = User::count();
        return view('dashboard', compact('bookCount', 'userCount'));
    })->name('dashboard');

    Route::resource('books', BookController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('users', UserController::class)->middleware('role:super_admin');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
