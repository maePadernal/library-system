<?php

namespace App\Livewire\Admin\Book;
use Flux\Flux;
use App\Models\Book;
use Livewire\Component;
use Livewire\Attributes\Validate;

class CreateBookPage extends Component
{
    #[Validate('required')]
    public $name = '';
    #[Validate('required')]
    public $author = '';
    #[Validate('required|numeric')]
    public $stocks = '';
    public function render()
    {
        return view('livewire.admin.book.create-book-page');
    }

    public function save(){


        $this->validate();
     Book::create(
        [
         'name'=>$this->name,
         'author'=>$this->author,
         'stocks'=>$this->stocks,

        ]);
        Flux::modal ('success')->show();
        return redirect()->route('admin.books-list-page');
    }
}
