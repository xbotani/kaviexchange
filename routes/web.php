<?php

use App\Models\Role;
use App\Models\User;
use Inertia\Inertia;
use App\Models\Currency;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\KoyaController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CurrencyController;

Route::get('/login', function () {
    return Inertia::render('Auth/Login', [
        'canResetPassword' => Route::has('password.request'),
        'status' => session('status'),
    ]);
});
Route::get('/', [CurrencyController::class, 'home'])->name('home');
Route::get('/koyabranch', [KoyaController::class, 'home'])->name('koya');

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard', [
        'users'         => (int) User::count(),
        'roles'         => (int) Role::count(),
        'currency'   => (int) Currency::count(),
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/setLang/{locale}', function ($locale) {
    Session::put('locale', $locale);
    return back();
})->name('setlang');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::resource('/user', UserController::class)->except('create', 'show', 'edit');
    Route::post('/user/destroy-bulk', [UserController::class, 'destroyBulk'])->name('user.destroy-bulk');

    Route::resource('/role', RoleController::class)->except('create', 'show', 'edit');
    Route::post('/role/destroy-bulk', [RoleController::class, 'destroyBulk'])->name('role.destroy-bulk');

    Route::resource('/currency', CurrencyController::class)->except('create', 'show', 'edit');
    Route::post('/currency/destroy-bulk', [CurrencyController::class, 'destroyBulk'])->name('currency.destroy-bulk');

    Route::resource('/koya', KoyaController::class)->except('create', 'show', 'edit');
    Route::post('/koya/destroy-bulk', [KoyaController::class, 'destroyBulk'])->name('koya.destroy-bulk');

});

require __DIR__.'/auth.php';
