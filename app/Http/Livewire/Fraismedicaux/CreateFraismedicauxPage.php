<?php

namespace App\Http\Livewire\Fraismedicaux;

use App\Models\User;
use Livewire\Component;

class CreateFraismedicauxPage extends Component
{
    public function render($id)
    {
        $user = User::find($id);
        return view('livewire.fraismedicaux.create-fraismedicaux-page')->with('user',$user);
    }
}
