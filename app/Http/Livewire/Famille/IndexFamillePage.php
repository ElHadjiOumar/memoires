<?php

namespace App\Http\Livewire\Famille;

use App\Models\Famille;
use App\Models\User;
use Livewire\Component;

class IndexFamillePage extends Component
{
    public function render($id)
    {
        $user = User::find($id);
        $famille = Famille::all();
        return view('livewire.famille.index-famille-page')->with('user',$user)->with('famille',$famille);
    }
}
