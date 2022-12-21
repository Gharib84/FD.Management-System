<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController; 
use App\Http\Controllers\roomscontroller;

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
    return redirect('login');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::resource('books', BookController::class);
Route::resource('rooms', roomscontroller::class)->only([
    'index', 'create', 'store', 'show', 'destroy'
]);

Route::post('rooms/invoice', [roomscontroller::class, 'store_invoice'])->name('rooms.store_invoice');

require __DIR__.'/auth.php';
