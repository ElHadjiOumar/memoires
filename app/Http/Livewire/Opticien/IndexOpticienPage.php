<?php

namespace App\Http\Livewire\Opticien;

use App\Models\Opticien;
use Livewire\Component;

class IndexOpticienPage extends Component
{
    public function render()
    {
        $opticien = Opticien::all(); 
        return view('livewire.opticien.index-opticien-page')->with('opticien',$opticien);
    }
}
