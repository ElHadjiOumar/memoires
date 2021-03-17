<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maladie;
use App\Models\Medicament;
use Illuminate\Http\Request;

class MedicamentController extends Controller
{
    public function index()
    {
        return view('admin.medicament.medicament');
    }

    public function store(Request $request)
    {
        $medicament = new Medicament();
        $medicament->maladie_id = $request->input('maladie_id');
        $medicament->medicament_nom = $request->input('medicament_nom');
        $medicament->medicament_caracteristique = $request->input('medicament_caracteristique');
        $medicament->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./medicament/' . $medicament->maladie_id))->with('status', 'medicament ajoutée avec succes à la maladie');
    }

    public function edit()
    {
        return view('admin.medicament.edit');
    }
    public function update(Request $request, $id)
    {
        $medicament = Medicament::find($id);
        $medicament->maladie_id = $request->input('maladie_id');
        $medicament->medicament_nom = $request->input('medicament_nom');
        $medicament->medicament_caracteristique = $request->input('medicament_caracteristique');
        $medicament->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./medicament/' . $medicament->maladie_id))->with('status', 'medicament mise à jour avec succes à la maladie');
    }
    public function delete($id)
    {
        $medicament = Medicament::findOrFail($id);
        $medicament->delete();

        return response()->json(['status' => 'medicament supprimé avec succes']);
    }
}
