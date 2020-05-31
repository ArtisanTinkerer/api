<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function index()
    {
        dd('the book index');
    }
}
