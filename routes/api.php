<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
// get all data
Route::get('/books', [BookController::class, 'index'])->name('books.index');
// get select data
Route::get('/books/{books}', [BookController::class, 'show'])->name('books.show');
// create new data
Route::post('/books', [BookController::class, 'store'])->name('books.store');
// update data
Route::put('/books/{books}', [BookController::class, 'update'])->name('books.update');
// delete select data
Route::delete('/books/{books}', [BookController::class, 'delete'])->name('books.delete');
// search data
// Route::get('/books/search/{query}', [BookController::class, 'search'])->name('books.search');
