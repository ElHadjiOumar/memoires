<?php

namespace App\Http\Livewire\Fraispharm;

use App\Models\Prisechargespharms;
use Livewire\Component;

class IndexFraispharmPage extends Component
{
    public function render()
    {
        $pharm = Prisechargespharms::all();
        return view('livewire.fraispharm.index-fraispharm-page')->with('pharm',$pharm);;
    }
}
