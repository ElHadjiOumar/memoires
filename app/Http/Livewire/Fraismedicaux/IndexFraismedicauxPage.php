<?php

namespace App\Http\Livewire\Fraismedicaux;

use App\Models\Prisecharge;
use App\Models\User;
use Livewire\Component;

class IndexFraismedicauxPage extends Component
{
    public function render()
    {
        $medic = Prisecharge::all();
        return view('livewire.fraismedicaux.index-fraismedicaux-page')->with('medic', $medic);
    }
}
