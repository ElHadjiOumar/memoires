<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Opticien;
use Illuminate\Http\Request;

class OpticienController extends Controller
{
    public function index()
    {

        return view('admin.opticien.index');
    }

    public function create()
    {
        return view('admin.opticien.create');
    }

    public function store(Request $request)
    {
        $opticien = new Opticien();
        $opticien->opticien_nom = $request->input('opticien_nom');
        $opticien->opticien_prenom = $request->input('opticien_prenom');
        $opticien->opticien_ville = $request->input('opticien_ville');
        $opticien->opticien_adress = $request->input('opticien_adress');
        $opticien->opticien_numero = $request->input('opticien_numero');
        $opticien->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./opticien/'))->with('status', 'opticien ajoutée avec success');
    }
    public function edit()
    {
        return view('admin.opticien.edit');
    }
    public function update(Request $request, $id)
    {
        $opticien = Opticien::find($id);
        $opticien->opticien_nom = $request->input('opticien_nom');
        $opticien->opticien_prenom = $request->input('opticien_prenom');
        $opticien->opticien_ville = $request->input('opticien_ville');
        $opticien->opticien_adress = $request->input('opticien_adress');
        $opticien->opticien_numero = $request->input('opticien_numero');
        $opticien->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./opticien/'))->with('status', 'opticien mise à jour avec succes');
    }
    public function delete($id)
    {
        $opticien = Opticien::findOrFail($id);
        $opticien->delete();

        return response()->json(['status' => 'opticien supprimé avec succes']);
    }
}
