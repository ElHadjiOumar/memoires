<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class IndexUserPage extends Component
{
    public function render()
    {
        $users = User::all();
        return view('livewire.user.index-user-page')->with('users',$users); 
    }
}
