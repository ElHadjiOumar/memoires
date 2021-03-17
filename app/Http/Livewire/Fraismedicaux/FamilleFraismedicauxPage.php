<?php

namespace App\Http\Livewire\Fraismedicaux;

use App\Models\Famille;
use Livewire\Component;

class FamilleFraismedicauxPage extends Component
{
    public function render($id)
    {
        $famille = Famille::find($id);
        return view('livewire.fraismedicaux.famille-fraismedicaux-page')->with('famille', $famille);
    }
}
