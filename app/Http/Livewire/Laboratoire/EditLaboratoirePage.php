<?php

namespace App\Http\Livewire\Laboratoire;

use App\Models\Laboratoire;
use Livewire\Component;

class EditLaboratoirePage extends Component
{
    public function render($id)
    {
        $laboratoire = Laboratoire::find($id);
        return view('livewire.laboratoire.edit-laboratoire-page')->with('laboratoire',$laboratoire);
    }
}
