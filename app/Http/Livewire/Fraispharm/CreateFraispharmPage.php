<?php

namespace App\Http\Livewire\Fraispharm;

use App\Models\User;
use Livewire\Component;

class CreateFraispharmPage extends Component
{
    public function render($id)
    {
        $user = User::find($id);
        return view('livewire.fraispharm.create-fraispharm-page')->with('user', $user);
    }
}
