<?php

namespace App\Http\Livewire\Medecin;

use App\Models\Medecin;
use App\Models\Specialisation;
use Livewire\Component;

class IndexMedecinPage extends Component
{
    public function render($id)
    {
        $specialisation = Specialisation::find($id);
        $medecin = Medecin::all();
        return view('livewire.medecin.index-medecin-page')->with('specialisation',$specialisation)
        ->with('medecin',$medecin);
    }
}
