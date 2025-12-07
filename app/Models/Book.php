<?php

namespace App\Models;

use App\Models\Category;
use App\Models\BorrowedBook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Book extends Model
{
use HasFactory;
protected $fillable = [
        'name',
        'author',
        'stocks',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_categories');
    }


    public function borrowedBooks()
    {
        return $this->hasMany(BorrowedBook::class);
    }
}
