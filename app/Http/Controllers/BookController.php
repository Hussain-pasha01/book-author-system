<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Http\Resources\BookResource;

class BookController extends Controller
{
    // Get all books
    public function index()
    {
        $books = Book::with('author')->get();
        return BookResource::collection($books);
    }

    // Create book
    public function store(StoreBookRequest $request)
    {
        $book = Book::create($request->validated());

        return response()->json([
            'message' => 'Book created successfully',
            'data' => $book
        ], 201);
    }

    // Get single book
    public function show(Book $book)
    {
        return new BookResource($book->load('author'));
    }

    // Update book
    public function update(UpdateBookRequest $request, Book $book)
    {
        $book->update($request->validated());

        return response()->json([
            'message' => 'Book updated successfully',
            'data' => $book
        ]);
    }

    // Delete book
    public function destroy(Book $book)
    {
        $book->delete();

        return response()->json([
            'message' => 'Book deleted successfully'
        ]);
    }
}
