<?php

use App\Http\Controllers\BookController;
use App\Models\Book;
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
// get all data
Route::get('/books', [BookController::class, 'index'])->name('books.index');
// get select data
Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
// create new data
Route::post('/books', [BookController::class, 'store'])->name('books.store');
// update data
Route::put('/books/{id}', [BookController::class, 'update'])->name('books.update');
// delete select data
Route::delete('/books/{id}', [BookController::class, 'delete'])->name('books.delete');
