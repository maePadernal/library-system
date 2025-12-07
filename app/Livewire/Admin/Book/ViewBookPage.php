<?php

namespace App\Livewire\Admin\Book;

use App\Models\Book;
use Livewire\Component;

class ViewBookPage extends Component
{

 public $book;
    public function mount($id){
        $this->book= Book::find($id);
    }
    public function render()
    {
        return view('livewire.admin.book.view-book-page');
    }
}
