<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CentreOrtho;
use Illuminate\Http\Request;

class CentreOrthoController extends Controller
{
    public function index()
    {

        return view('admin.centreortho.index');
    }

    public function create()
    {
        return view('admin.centreortho.create');
    }

    public function store(Request $request)
    {
        $centreOrtho = new CentreOrtho();
        $centreOrtho->centreOrtho_nom = $request->input('centreOrtho_nom');
        $centreOrtho->centreOrtho_ville = $request->input('centreOrtho_ville');
        $centreOrtho->centreOrtho_adress = $request->input('centreOrtho_adress');
        $centreOrtho->centreOrtho_numero = $request->input('centreOrtho_numero');
        $centreOrtho->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('centreOrtho'))->with('status', 'Centre orthopediste ajoutée avec success');
    }
    public function edit()
    {
        return view('admin.centreortho.edit');
    }
    public function update(Request $request, $id)
    {
        $centreOrtho = centreOrtho::find($id);
        $centreOrtho->centreOrtho_nom = $request->input('centreOrtho_nom');
        $centreOrtho->centreOrtho_ville = $request->input('centreOrtho_ville');
        $centreOrtho->centreOrtho_adress = $request->input('centreOrtho_adress');
        $centreOrtho->centreOrtho_numero = $request->input('centreOrtho_numero');
        $centreOrtho->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('centreOrtho'))->with('status', 'Centre orthopediste mise à jour avec succes');
    }
    public function delete($id)
    {
        $centreOrtho = CentreOrtho::findOrFail($id);
        $centreOrtho->delete();

        return response()->json(['status' => 'Centre orthopediste supprimé avec succes']);
    }
}
