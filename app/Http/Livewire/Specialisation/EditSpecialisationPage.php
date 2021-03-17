<?php

namespace App\Http\Livewire\Specialisation;

use App\Models\Specialisation;
use Livewire\Component;

class EditSpecialisationPage extends Component
{
    public function render($id)
    {
        $specialisation = Specialisation::find($id);
        return view('livewire.specialisation.edit-specialisation-page')->with('specialisation',$specialisation);
    }
}
