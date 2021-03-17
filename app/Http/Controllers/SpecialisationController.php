<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Specialisation;
use Illuminate\Http\Request;

class SpecialisationController extends Controller
{
    public function index()
    {
        return view('admin.specialisation.index');
    }
    public function create()
    {
        return view('admin.specialisation.create');
    }

    public function store(Request $request)
    {
        $specialisation = new Specialisation();
        $specialisation->specialisation_nom = $request->input('specialisation_nom');
        $specialisation->description = $request->input('description');
        $specialisation->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./specialisation/'))->with('status', 'specialisation ajoutée avec succes');
    }

    public function edit($id)
    {

        return view('admin.specialisation.edit');
    }
    public function update(Request $request, $id)
    {
        $specialisation = Specialisation::find($id);
        $specialisation->specialisation_nom = $request->input('specialisation_nom');
        $specialisation->description = $request->input('description');
        $specialisation->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./specialisation/'))->with('status', 'specialisation mise à jour avec succes');
    }
    public function delete($id)
    {
        $specialisation = Specialisation::findOrFail($id);
        $specialisation->delete();

        return response()->json(['status' => 'specialisation supprimé avec succes']);
    }
}
