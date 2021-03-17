<?php

namespace App\Http\Livewire\Pharmacie;

use App\Models\Pharmacie;
use Livewire\Component;

class IndexPharmaciePage extends Component
{
    public function render()
    {
        $pharmacie = Pharmacie::all(); 
        return view('livewire.pharmacie.index-pharmacie-page')->with('pharmacie',$pharmacie);
    }
}
