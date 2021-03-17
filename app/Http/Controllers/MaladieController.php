<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Maladie;
use Illuminate\Http\Request;

class MaladieController extends Controller
{
    public function index()
    {

        return view('admin.maladie.index');
    }
    public function create()
    {
        return view('admin.maladie.create');
    }

    public function store(Request $request)
    {
        $maladie = new Maladie();
        $maladie->maladie_nom = $request->input('maladie_nom');
        $maladie->description = $request->input('description');
        $maladie->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./maladie'))->with('status', 'maladie ajoutée avec succes');
    }

    public function edit()
    {
        return view('admin.maladie.edit');
    }
    public function update(Request $request, $id)
    {
        $maladie = Maladie::find($id);
        $maladie->maladie_nom = $request->input('maladie_nom');
        $maladie->description = $request->input('description');
        $maladie->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./maladie'))->with('status', 'maladie mise à jour avec succes');
    }
    public function delete($id)
    {
        $maladie = Maladie::findOrFail($id);
        $maladie->delete();

        return response()->json(['status' => 'maladie supprimé avec succes']);
    }
}
