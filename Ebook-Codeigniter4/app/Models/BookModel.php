<?php namespace App\Models;

use CodeIgniter\Model;

class BookModel extends Model
{
    protected $table = 'books';
    protected $allowedFields = ['title', 'category', 'isbn', 'author', 'cover_image', 'book_file'];
}