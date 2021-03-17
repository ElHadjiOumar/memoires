<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Medecin;
use Illuminate\Http\Request;

class MedecinController extends Controller
{
    public function index()
    {
        return view('admin.medecin.medecin');
    }

    public function store(Request $request)
    {
        $medecin = new Medecin();
        $medecin->specialisation_id = $request->input('specialisation_id');
        $medecin->medecin_nom = $request->input('medecin_nom');
        $medecin->medecin_prenom = $request->input('medecin_prenom');
        $medecin->medecin_ville = $request->input('medecin_ville');
        $medecin->medecin_adress = $request->input('medecin_adress');
        $medecin->medecin_numero = $request->input('medecin_numero');
        $medecin->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./medecin/' . $medecin->specialisation_id))->with('status', 'medecin ajoutée avec succes à la specialisation');
    }

    public function edit()
    {
        return view('admin.medecin.edit');
    }
    public function update(Request $request, $id)
    {
        $medecin = Medecin::find($id);
        $medecin->specialisation_id = $request->input('specialisation_id');
        $medecin->medecin_nom = $request->input('medecin_nom');
        $medecin->medecin_prenom = $request->input('medecin_prenom');
        $medecin->medecin_ville = $request->input('medecin_ville');
        $medecin->medecin_adress = $request->input('medecin_adress');
        $medecin->medecin_numero = $request->input('medecin_numero');


        $medecin->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./medecin/' . $medecin->specialisation_id))->with('status', 'medecin mise à jour avec succes à la specialisation');
    }
    public function delete($id)
    {
        $medecin = Medecin::findOrFail($id);
        $medecin->delete();

        return response()->json(['status' => 'Medecin supprimé avec succes']);
    }
}
