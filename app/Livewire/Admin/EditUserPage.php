<?php

namespace App\Livewire\Admin;

use Flux\Flux;
use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class EditUserPage extends Component
{

    public $user;

       // $this->name , $this->email, $this->password is  use for form
       // they are connectedm using wire:model, any changes in form will be reflected in these variables
    #[Validate('required')]
    public $name = '';
    #[Validate('required|unique:users,email')]
    public $email = '';
    #[Validate('required')]
    public $password = '';

    public function mount($id)
    {
        // get user data base on id
        $this->user = User::find($id);


        //set inital data to form coming from user record fetch in database
        $this->name = $this->user->name;
        $this->email = $this->user->email;
    }
    public function render()
    {
        return view('livewire.admin.edit-user');
    }
    public function save()
    {
        // $this->name, $this->email, $this->password
        // has lastest data value coming from the form then it is use to update user details

        $this->user->name = $this->name;
        $this->user->email = $this->email;
        $this->user->password = $this->password;
        $this->user->save();

        Flux::modal('success')->show();
          sleep(2);
          return redirect()->route('admin.users-page');


    }
}
