<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Book;


class BooksTest extends TestCase
{

    use WithFaker;
    use RefreshDatabase;

    /**
     *
     *@test
     */
    public function can_create_book()
    {
        $book = make(Book::class);

        $this->post(route('books.store'),$book->toArray())
        ->assertStatus(200);

        $this->assertDatabaseHas('books',$book->toArray());
    }

    /**
     *
     *@test
     */
    public function can_delete_book()
    {
        $book = create(Book::class);
        $this->delete(route('books.destroy',$book));

        $this->assertDatabaseMissing('books',$book->toArray());

    }

    /**
     *
     *@test
     */
    public function can_show_book()
    {
        $book = create(Book::class);

        $this->get(route('books.show',$book))
            ->assertJsonFragment(['id' => $book->id]);
    }

    /**
     *
     *@test
     */
    public function can_update_book()
    {
        $book = create(Book::class);

        $this->put(route('books.update',$book),['author' => 'changed','title'=>$book->title]);

        $this->assertDatabaseHas('books',['author'=>'changed']);

    }
















}
