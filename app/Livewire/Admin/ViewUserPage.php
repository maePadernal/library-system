<?php

namespace App\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ViewUserPage extends Component
{

    public $user;
    public function mount($id)
    {
        $this->user = User::find($id);
    }

    public function render()
    {
        return view(
            'livewire.admin.view-user');
    }
}
