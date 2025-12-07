<?php

namespace App\Livewire\Admin;


use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class UsersListPage extends Component
{
    use WithPagination;

    public $search = '';

    public function render()
    {


        return view(
            'livewire.admin.users-list-page',
            [
                'users' => User::where('name', 'like', '%' . $this->search . '%')->orWhere('email', 'like', '%' . $this->search . '%')->paginate(40),
            ]
        );
    }

    public function testClick()
    {
        dd('Hellow meme');
    }
}
