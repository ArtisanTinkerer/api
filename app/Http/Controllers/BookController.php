<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBookRequest;
use Illuminate\Http\Request;
use App\Book;

class BookController extends Controller
{
/*
+--------+-----------+---------------------+---------------+------------------------------------------------------------
| Domain | Method    | URI                 | Name          | Action
+--------+-----------+---------------------+---------------+------------------------------------------------------------
|        | GET|HEAD  | /                   |               | Closure
|        | GET|HEAD  | api/books           | books.index   | App\Http\Controllers\BookController@index
|        | POST      | api/books           | books.store   | App\Http\Controllers\BookController@store
|        | GET|HEAD  | api/books/{book}    | books.show    | App\Http\Controllers\BookController@show
|        | PUT|PATCH | api/books/{book}    | books.update  | App\Http\Controllers\BookController@update
|        | DELETE    | api/books/{book}    | books.destroy | App\Http\Controllers\BookController@destroy
|        | POST      | api/login           |               | App\Http\Controllers\AuthController@login
|        | GET|HEAD  | sanctum/csrf-cookie |               | Laravel\Sanctum\Http\Controllers\CsrfCookieController@show
+--------+-----------+---------------------+---------------+------------------------------------------------------------+------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+
*/


    /**
     * Display a listing of the resource
     * @return Book[]|\Illuminate\Database\Eloquent\Collection
     */
    public function index()
    {
        return Book::all();
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
        return $book;
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



}
