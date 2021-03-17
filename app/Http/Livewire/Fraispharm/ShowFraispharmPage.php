<?php

namespace App\Http\Livewire\Fraispharm;

use App\Models\Fraispharms;
use Livewire\Component;

class ShowFraispharmPage extends Component
{
    public function render($id)
    {
        $show = Fraispharms::where('prisechargespharms_id', '=', $id)->get();
        return view('livewire.fraispharm.show-fraispharm-page')->with('show',$show);;
    }
}
