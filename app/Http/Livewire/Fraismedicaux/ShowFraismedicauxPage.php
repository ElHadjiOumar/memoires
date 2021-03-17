<?php

namespace App\Http\Livewire\Fraismedicaux;

use App\Models\Fraismedics;
use Livewire\Component;

class ShowFraismedicauxPage extends Component
{
    public function render($id)
    {
        $show = Fraismedics::where('prisecharge_id', '=', $id)->get();
        return view('livewire.fraismedicaux.show-fraismedicaux-page')->with('show',$show);
    }
}
