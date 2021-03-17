<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Livewire\Component;

class EditUserPage extends Component
{
    public function render($id)
    {
        $users = User::findOrFail($id);
        return view('livewire.user.edit-user-page')->with('users',$users);
    }
}
