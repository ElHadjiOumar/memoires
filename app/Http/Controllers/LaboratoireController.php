<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Laboratoire;
use Illuminate\Http\Request;

class LaboratoireController extends Controller
{
    public function index()
    {

        return view('admin.laboratoire.index');
    }

    public function create()
    {
        return view('admin.laboratoire.create');
    }

    public function store(Request $request)
    {
        $laboratoire = new Laboratoire();
        $laboratoire->laboratoire_nom = $request->input('laboratoire_nom');
        $laboratoire->laboratoire_type = $request->input('laboratoire_type');
        $laboratoire->laboratoire_ville = $request->input('laboratoire_ville');
        $laboratoire->laboratoire_adress = $request->input('laboratoire_adress');
        $laboratoire->laboratoire_numero = $request->input('laboratoire_numero');
        $laboratoire->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./laboratoire'))->with('status', 'Laboratoire ajoutée avec success');
    }
    public function edit()
    {
        return view('admin.laboratoire.edit');
    }
    public function update(Request $request, $id)
    {
        $laboratoire = Laboratoire::find($id);
        $laboratoire->laboratoire_nom = $request->input('laboratoire_nom');
        $laboratoire->laboratoire_type = $request->input('laboratoire_type');
        $laboratoire->laboratoire_ville = $request->input('laboratoire_ville');
        $laboratoire->laboratoire_adress = $request->input('laboratoire_adress');
        $laboratoire->laboratoire_numero = $request->input('laboratoire_numero');
        $laboratoire->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./laboratoire'))->with('status', 'laboratoire mise à jour avec succes');
    }
    public function delete($id)
    {
        $laboratoire = Laboratoire::findOrFail($id);
        $laboratoire->delete();

        return response()->json(['status' => 'laboratoire supprimé avec succes']);
    }
}
