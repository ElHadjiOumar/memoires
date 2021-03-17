<?php

namespace App\Http\Livewire\Centreortho;

use App\Models\CentreOrtho;
use Livewire\Component;

class EditCentreorthoPage extends Component
{
    public function render($id)
    {
        $centreOrtho = CentreOrtho::find($id);
        return view('livewire.centreortho.edit-centreortho-page')->with('centreOrtho',$centreOrtho);
    }
}
