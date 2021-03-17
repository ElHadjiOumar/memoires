<?php

namespace App\Http\Livewire\Medecin;

use App\Models\Medecin;
use App\Models\Specialisation;
use Livewire\Component;

class EditMedecinPage extends Component
{
    public function render($id)
    {
        $specialisation = Specialisation::find($id);
        $medecin = Medecin::find($id);
        return view('livewire.medecin.edit-medecin-page')->with('specialisation',$specialisation)->with('medecin',$medecin);
    }
}
