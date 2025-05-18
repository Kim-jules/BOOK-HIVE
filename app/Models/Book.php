<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    //
    protected $fillable = ['book_title', 'author', 'category', 'lang', 'publisher', 'pub_date', 'ISBN', 'cover_image'];

}
