<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Payment;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});




Route::get('/a', [OrderController::class, 'index']);
Route::get('/orders/create', [OrderController::class, 'create']);
Route::post('/orders/create', [OrderController::class, 'store']);
Route::get('/orders/edit/{id}', [OrderController::class, 'edit']);
Route::patch('/orders/update/{id}', [OrderController::class, 'update']);
Route::get('/orders', [OrderController::class, 'index']);
Route::delete('/orders/{id}', [OrderController::class, 'destroy']);


Route::get('/a', [PaymentController::class, 'index']);
Route::get('/payments/create', [PaymentController::class, 'create']);
Route::post('/payments/create', [PaymentController::class, 'store']);
Route::get('/payments/edit/{id}', [PaymentController::class, 'edit']);
Route::patch('/payments/update/{id}', [PaymentController::class, 'update']);
Route::get('/payments', [PaymentController::class, 'index']);
Route::delete('/payments/{id}', [PaymentController::class, 'destroy']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
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
