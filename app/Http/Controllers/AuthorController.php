<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;
use App\Http\Resources\AuthorResource;

class AuthorController extends Controller
{
    // Get all authors
    public function index()
    {
        $authors = Author::with('books')->get();
        return response()->json([
            'message' => 'Author Fetched Successfully',
            'data' => $authors
        ]);
    }

    // Create author
    public function store(StoreAuthorRequest $request)
    {
        $author = Author::create($request->validated());

        return response()->json([
            'message' => 'Author created successfully',
            'data' => $author
        ], 201);
    }

    // Get single author
    public function show(Author $author)
    {
        return new AuthorResource($author->load('books'));
    }

    // Update author
    public function update(UpdateAuthorRequest $request, Author $author)
    {
        $author->update($request->validated());

        return response()->json([
            'message' => 'Author updated successfully',
            'data' => $author
        ]);
    }

    // Delete author
    public function destroy(Author $author)
    {
        $author->delete();

        return response()->json([
            'message' => 'Author deleted successfully'
        ]);
    }
}
