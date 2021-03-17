<?php

namespace App\Http\Livewire\Fraispharm;

use App\Models\Famille;
use Livewire\Component;

class FamilleFraispharmPage extends Component
{
    public function render($id)
    {
        $famille = Famille::find($id);
        return view('livewire.fraispharm.famille-fraispharm-page')->with('famille', $famille);
    }
}
