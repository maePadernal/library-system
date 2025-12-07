<?php

namespace App\Models;
use App\Models\BorrowedBook;
use Illuminate\Database\Eloquent\Model;

class BookDamage extends Model
{
   public function borrowedBook()
    {
        return $this->belongsTo(BorrowedBook::class);
    }
}
