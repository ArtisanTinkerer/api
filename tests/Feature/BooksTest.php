<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;

use App\Book;


class BooksTest extends TestCase
{

    use WithFaker;
    use RefreshDatabase;
    use WithoutMiddleware;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }


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

    //show

    //list all

}
