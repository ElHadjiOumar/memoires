<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Hopitale;
use Illuminate\Http\Request;

class HopitaleController extends Controller
{
    public function index()
    {

        return view('admin.hopitale.index');
    }

    public function create()
    {
        return view('admin.hopitale.create');
    }

    public function store(Request $request)
    {
        $hopital = new Hopitale();
        $hopital->hopital_nom = $request->input('hopital_nom');
        $hopital->hopital_type = $request->input('hopital_type');
        $hopital->hopital_ville = $request->input('hopital_ville');
        $hopital->hopital_adress = $request->input('hopital_adress');
        $hopital->hopital_numero = $request->input('hopital_numero');
        $hopital->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./hopitale'))->with('status', 'Structure Hospitaliere ajoutée avec success');
    }
    public function edit($id)
    {
        $hopital = Hopitale::find($id);
        return view('admin.hopitale.edit')->with('hopital', $hopital);
    }
    public function update(Request $request, $id)
    {
        $hopital = Hopitale::find($id);
        $hopital->hopital_nom = $request->input('hopital_nom');
        $hopital->hopital_type = $request->input('hopital_type');
        $hopital->hopital_ville = $request->input('hopital_ville');
        $hopital->hopital_adress = $request->input('hopital_adress');
        $hopital->hopital_numero = $request->input('hopital_numero');
        $hopital->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./hopitale'))->with('status', 'Structure Hospitaliere mise à jour avec succes');
    }
    public function delete($id)
    {
        $hopital = Hopitale::findOrFail($id);
        $hopital->delete();

        return response()->json(['status' => 'Structure Hospitaliere supprimé avec succes']);
    }
}
