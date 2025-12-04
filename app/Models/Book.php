<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Book extends Model
{
         public function categories()
    {
        return $this->belongsToMany(Category::class, 'book_categories');
    }

}
