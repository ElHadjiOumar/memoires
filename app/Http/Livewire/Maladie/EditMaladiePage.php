<?php

namespace App\Http\Livewire\Maladie;

use App\Models\Maladie;
use Livewire\Component;

class EditMaladiePage extends Component
{
    public function render($id)
    {
        $maladie = Maladie::find($id);
        return view('livewire.maladie.edit-maladie-page')->with('maladie',$maladie);
    }
}
