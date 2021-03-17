<?php

namespace App\Http\Livewire\Opticien;

use App\Models\Opticien;
use Livewire\Component;

class EditOpticienPage extends Component
{
    public function render($id)
    {
        $opticien = Opticien::find($id);
        return view('livewire.opticien.edit-opticien-page')->with('opticien',$opticien);
    }
}
