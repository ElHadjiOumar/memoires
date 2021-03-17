<?php

namespace App\Http\Livewire\Laboratoire;

use App\Models\Laboratoire;
use Livewire\Component;

class IndexLaboratoirePage extends Component
{
    public function render()
    {
        $laboratoire = Laboratoire::all();
        return view('livewire.laboratoire.index-laboratoire-page')->with('laboratoire',$laboratoire);
    }
}
