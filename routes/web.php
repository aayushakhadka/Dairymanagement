<?php

use App\Http\Controllers\DetailController;
use App\Http\Controllers\ProfileController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

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
    // $name = 'aayusha';
    // $price = 500;
    // $quantity = 1;
    // Mail::to('test@test.com')->send(new TestMail($name, $price, $quantity));
    return view('welcome');
});







Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/details', [DetailController::class, 'index']);
    Route::get('/details/create', [DetailController::class, 'create']);
Route::post('/details/create', [DetailController::class, 'store']);
Route::get('/details/edit/{id}', [DetailController::class, 'edit']);
Route::patch('/details/update/{id}', [DetailController::class, 'update']);
Route::delete('/details/{id}', [DetailController::class, 'destroy']);


    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
