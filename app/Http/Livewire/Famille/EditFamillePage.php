<?php

namespace App\Http\Livewire\Famille;

use App\Models\Famille;
use App\Models\User;
use Livewire\Component;

class EditFamillePage extends Component
{
    public function render($id)
    {
        $user = User::find($id);
        $famille = Famille::find($id);
        return view('livewire.famille.edit-famille-page')->with('user',$user)->with('famille',$famille);
    }
}
