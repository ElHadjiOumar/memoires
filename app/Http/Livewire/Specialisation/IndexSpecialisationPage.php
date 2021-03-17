<?php

namespace App\Http\Livewire\Specialisation;

use App\Models\Specialisation;
use Livewire\Component;

class IndexSpecialisationPage extends Component
{
    public function render()
    {
        $specialisation = Specialisation::all(); 
        return view('livewire.specialisation.index-specialisation-page')->with('specialisation',$specialisation);
    }
}
