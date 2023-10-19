<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // index function 
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }
    // show function
}
