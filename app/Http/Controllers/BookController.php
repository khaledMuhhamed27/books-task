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
    public function show(Book $books)
    {
        return response()->json($books);
    }
    // store function
    public function store(Request $request)
    {
        $books = Book::create($request->all());
        return response()->json($books);
    }
    // update function
    public function update(Request $request, Book $books)
    {
        $books->update($request->all());
        return response()->json($books);
    }
    // delete function
    public function delete(Book $books)
    {
        $books->delete();
        return response()->json($books);
    }
    // // search function
    // public function search()
    // {
    //     $books = Book::where()->get();
    //     return response()->json($books);
    // }
}
