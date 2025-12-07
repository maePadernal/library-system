<?php

namespace App\Models;
use App\Models\Book;
use App\Models\BookDamage;
use Illuminate\Database\Eloquent\Model;

class BorrowedBook extends Model
{
     public function bookDamages(){
        return $this->hasMany(BookDamage::class);
    }
     public function book(){
        return $this->belongsTo(Book::class);
     }
     public function user(){
        return $this->belongsTo(User::class);
     }

}
