<?php

use Illuminate\Database\Seeder;


class BooksSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Book::class, 50)->create();
    }
}
