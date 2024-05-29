<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('authors')->get();
        return response()->json($books);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'publication_year' => 'required|integer|min:1000|max:' . (date('Y-m-d')),
            'author_ids' => 'required|array',
            'author_ids.*' => 'exists:authors,id',
        ]);

        $book = Book::create([
            'title' => $request->title,
            'publication_year' => $request->publication_year,
        ]);

        $book->authors()->sync($request->author_ids);

        return response()->json($book->load('authors'), 201);
    }

    public function show($id)
    {
        $book = Book::with('authors')->findOrFail($id);
        return response()->json($book);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'publication_year' => 'required|integer|min:1000|max:' . (date('Y-m-d')),
            'author_ids' => 'required|array',
            'author_ids.*' => 'exists:authors,id',
        ]);

        $book = Book::findOrFail($id);
        $book->update($request->only('title', 'publication_year'));

        if($request->has('author_ids')) {
            $book->authors()->sync($request->author_ids);
        }

        return response()->json($book->load('authors'));
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return response()->json(null, 204);
    }
}
