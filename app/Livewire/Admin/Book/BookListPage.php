<?php

namespace App\Livewire\Admin\Book;
use App\Models\Book;
use Livewire\Component;
use Livewire\WithPagination;
class BookListPage extends Component
{
        use WithPagination;

        public $search='';
    public function render()
    {
        return view(
            'livewire.admin.book.book-list-page',
        [
           'books'=>Book::where('name', 'like', $this->search.'%')->paginate(20),
        ]

        );
    }
}
