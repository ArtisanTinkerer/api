<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;


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
        $name = $this->faker->name();
        $title = $this->faker->sentence(3);

        $postArray = ['author'=>$name,'title'=>$title];

        $this->post('/api/books',$postArray)
        ->assertStatus(200);

        $this->assertDatabaseHas('books',$postArray);
    }


    //delete

    //show

    //list all

}
