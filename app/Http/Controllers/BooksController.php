<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('book.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('book.create');

    }

    // Show all the available books
    public function showAll() {
        $data = Book::all();
        return view('book.index', ['books' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $validated_data = $request->validate([
            'book_title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'category' => 'required|string|in:fiction,non-fiction,romance,science,horror,mystery,history,thriller,biography,adventure,poetry,fantasy,fairy tale',
            'lang' => 'required|string',
            'publisher' => 'required|string',
            'pub_date' => 'required|date_format:Y-m-d',
            'ISBN' => 'required|string|max:20',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if($request->hasFile('cover_image')) {
            $filename = time() . '.' . $request->cover_image->extension();
            $request->cover_image->storeAs('public/covers', $filename);
            $validated_data['cover_image'] = $filename;
        }

        Book::create($validated_data);

        return redirect()->route('books.all')->with('success', 'Book added!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $book = Book::findOrFail($id);
        return view('book.update', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $book = Book::findOrFail($id);

        $validated_data = $request->validate([
            'book_title' => 'required|string|max:255',
            'author' => 'required|string|max:100',
            'category' => 'required|string|in:fiction,non-fiction,romance,science,horror,mystery,history,thriller,biography,adventure,poetry,fantasy,fairy tale',
            'lang' => 'required|string',
            'publisher' => 'required|string',
            'pub_date' => 'required|date_format:Y-m-d',
            'ISBN' => 'required|string|max:20',
            'cover_image' => 'nullable|image|mimes:jpeg,png,jpg|max:2048'
        ]);

        if ($request->hasFile('cover_image')) {
        if ($book->cover_image && Storage::exists('public/covers/' . $book->cover_image)) {
            Storage::delete('public/covers/' . $book->cover_image);
        }

        $filename = time() . '.' . $request->cover_image->extension();
        $request->cover_image->storeAs('public/covers', $filename);
        $validated_data['cover_image'] = $filename;
    }

        $book->update($validated_data);

        return redirect()->route('books.all')->with('success', 'Book updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect()->route('books.all')->with('success', "Book deleted successfully");
    }
}
