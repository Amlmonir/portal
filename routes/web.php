<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin/dashboard', function () {
    return "Admin Dashboard";
})->middleware(['auth', 'admin']);








require __DIR__.'/auth.php';
// require __DIR__.'/front.php';
Route::get('/', function () {
    return view('front.index');
})->name('home');

// روت ديناميكي لكل الصفحات الـ 79
Route::get('/{page}', function ($page) {
    // بنقول للارافل: لو الملف موجود جوه فولدر front افتحه، لو مش موجود طلع 404
    if (view()->exists("front.$page")) {
        return view("front.$page");
    }
    abort(404);
});
