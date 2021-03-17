<?php

namespace App\Http\Livewire\Medicament;

use App\Models\Maladie;
use App\Models\Medicament;
use Livewire\Component;

class IndexMedicamentPage extends Component
{
    public function render($id)
    {
        $maladie = Maladie::find($id);
        $medicament = Medicament::all();
        return view('livewire.medicament.index-medicament-page')->with('maladie',$maladie)
        ->with('medicament',$medicament);
    }
}
