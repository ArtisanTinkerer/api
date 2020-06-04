<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use App\Book;
use App\Http\Resources\Books as BookResource;

class BookController extends Controller
{

    /**
     * Display a listing of the resource
     * @return Book[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return BookResource::collection(Book::all());
    }

    /**
     * Store a new book
     * @param StoreBookRequest $request
     */
    public function store(StoreBookRequest $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
    }

    /**
     * Display the specified book
     * @param Book $book
     * @return Book
     */
    public function show(Book $book)
    {
        return new BookResource($book);
    }

    /**
     * Update the specified book
     * @param StoreBookRequest $request
     * @param Book $book
     */
    public function update(StoreBookRequest $request, Book $book)
    {
        $book->title = $request->title;
        $book->author = $request->author;
        $book->save();
    }

    /**
     * Delete the specified book
     * @param Book $book
     * @throws \Exception
     */
    public function destroy(Book $book)
    {
        $book->delete();
    }


    /**
     * Return the stats for the stats component
     */
    public function stats()
    {
        $reviews = Book::all()->count();
        $books = Book::all()->count();

        return response()->json(['reviews' => $reviews,'books' => $books]);

    }

}
