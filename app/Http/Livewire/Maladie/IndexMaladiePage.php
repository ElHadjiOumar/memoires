<?php

namespace App\Http\Livewire\Maladie;

use App\Models\Maladie;
use Livewire\Component;

class IndexMaladiePage extends Component
{
    public function render()
    {
        $maladie = Maladie::all(); 
        return view('livewire.maladie.index-maladie-page')->with('maladie',$maladie);
    }
}
