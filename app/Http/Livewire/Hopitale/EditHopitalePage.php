<?php

namespace App\Http\Livewire\Hopitale;

use App\Models\Hopitale;
use Livewire\Component;

class EditHopitalePage extends Component
{
    public function render($id)
    {
        $hopital = Hopitale::find($id);
        return view('livewire.hopitale.edit-hopitale-page')->with('hopital',$hopital);
    }
}
