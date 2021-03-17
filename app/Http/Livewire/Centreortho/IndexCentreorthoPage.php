<?php

namespace App\Http\Livewire\Centreortho;

use App\Models\CentreOrtho;
use Livewire\Component;

class IndexCentreorthoPage extends Component
{
    public function render()
    {
        $centreOrtho = CentreOrtho::all();
        return view('livewire.centreortho.index-centreortho-page')->with('centreOrtho',$centreOrtho);
    }
}
