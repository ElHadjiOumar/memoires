<?php

namespace App\Http\Livewire\Pharmacie;

use App\Models\Pharmacie;
use Livewire\Component;

class EditPharmaciePage extends Component
{
    public function render($id)
    {
        $pharmacie = Pharmacie::find($id);
        return view('livewire.pharmacie.edit-pharmacie-page')->with('pharmacie',$pharmacie);
    }
}
