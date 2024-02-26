<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books', compact('books'));
    }

    public function search(Request $request)
    {
        $searchTerm = $request->input('search');
        $books = Book::where('title', 'LIKE', "%$searchTerm%")->get();
        return response()->json($books);
    }
}
