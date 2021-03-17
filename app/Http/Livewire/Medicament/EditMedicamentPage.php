<?php

namespace App\Http\Livewire\Medicament;

use App\Models\Maladie;
use App\Models\Medicament;
use Livewire\Component;

class EditMedicamentPage extends Component
{
    public function render($id)
    {
        $maladie = Maladie::find($id);
        $medicament = Medicament::find($id);
        return view('livewire.medicament.edit-medicament-page')->with('maladie',$maladie)->with('medicament',$medicament);
    }
}
