<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Pharmacie;
use Illuminate\Http\Request;

class PharmacieController extends Controller
{
    public function index()
    {

        return view('admin.pharmacie.index');
    }

    public function create()
    {
        return view('admin.pharmacie.create');
    }
    public function store(Request $request)
    {
        $pharmacie = new Pharmacie();
        $pharmacie->pharmacie_nom = $request->input('pharmacie_nom');
        $pharmacie->pharmacie_adress = $request->input('pharmacie_adress');
        $pharmacie->pharmacie_numero = $request->input('pharmacie_numero');
        $pharmacie->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./pharmacie/'))->with('status', 'Pharmacie ajoutée avec succes');
    }

    public function edit($id)
    {
        $pharmacie = Pharmacie::find($id);
        return view('admin.pharmacie.edit')->with('pharmacie', $pharmacie);
    }
    public function update(Request $request, $id)
    {
        $pharmacie = Pharmacie::find($id);
        $pharmacie->pharmacie_nom = $request->input('pharmacie_nom');
        $pharmacie->pharmacie_adress = $request->input('pharmacie_adress');
        $pharmacie->pharmacie_numero = $request->input('pharmacie_numero');
        $pharmacie->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./pharmacie/'))->with('status', 'Pharmacie mise à jour avec succes');
    }
    public function delete($id)
    {
        $pharmacie = Pharmacie::findOrFail($id);
        $pharmacie->delete();

        return response()->json(['status' => 'Pharmacie supprimé avec succes']);
    }
}
