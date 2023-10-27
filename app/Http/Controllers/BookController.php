<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $books = Book::all();
        return response()->json($books);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $books = Book::create($request->all());
        return response()->json($books);
    }

    /**
     * Display the specified resource.
     */
    public function show(Book $books)
    {
        return response()->json($books);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $books)
    {
        $books->update($request->all());
        return response()->json($books);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Book $books)
    {
        $books->delete();
        return response()->json($books);
    }
}
