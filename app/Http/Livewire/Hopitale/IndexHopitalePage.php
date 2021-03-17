<?php

namespace App\Http\Livewire\Hopitale;

use App\Models\Hopitale;
use Livewire\Component;

class IndexHopitalePage extends Component
{
    public function render()
    {
        $hopital = Hopitale::all();
        return view('livewire.hopitale.index-hopitale-page')->with('hopital',$hopital);
    }
}
