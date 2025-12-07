<?php

namespace App\Livewire\Admin;
use Flux\Flux;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class CreateUserPage extends Component
{
     #[Validate('required')]
    public $name='';
     #[Validate('required|unique:users,email')]
    public $email='';
     #[Validate('required')]
    public $password='';

    public function render()
    {
        return view('livewire.admin.create-user-page');
    }
    public function save(){
                $this->validate();
        User::create(
            [
                'name'=>$this->name,
                'email'=>$this->email,
                'password'=> Hash::make($this->password),
            ]);

        Flux::modal('success')->show();
         return redirect()->route('admin.users-page');
    }
}
