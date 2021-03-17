<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Famille;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class FamilleController extends Controller
{

    public function index()
    {

        return view('admin.famille.famille');
    }

    public function store(Request $request)
    {


        $famille = new Famille();
        $famille->user_id = $request->input('user_id');
        $famille->nom = $request->input('nom');
        $famille->prenom = $request->input('prenom');
        $famille->position = $request->input('position');
        $famille->date_nais = $request->input('date_nais');

        if ($request->hasFile('image')) {
            // Get image file
            $file = $request->file('image');
            $extension =  $file->getClientOriginalExtension(); //image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/famille/', $filename);
            $famille->image = $filename;
        } else {
            return $request;
            $famille->image = '';
        }
        $famille->save();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./famille/' . $famille->user_id))->with('status', 'Membre de la famille ajoutée avec succes');
    }

    public function edit($id)
    {
        $user = User::find($id);
        $famille = Famille::find($id);
        return view('admin.famille.edit')->with('user', $user)->with('famille', $famille);
    }
    public function update(Request $request, $id)
    {
        $famille = Famille::find($id);
        $famille->user_id = $request->input('user_id');
        $famille->nom = $request->input('nom');
        $famille->prenom = $request->input('prenom');
        $famille->position = $request->input('position');
        $famille->date_nais = $request->input('date_nais');

        if ($request->hasFile('image')) {
            // Get image file
            $file = $request->file('image');
            $extension =  $file->getClientOriginalExtension(); //image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/famille/', $filename);
            $famille->image = $filename;
        } else {
            return $request;
            $famille->image = '';
        }
        $famille->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./famille/' . $famille->user_id))->with('status', 'Membre de la famille mise à jour avec succes');
    }

    public function delete($id)
    {
        $hopital = Famille::findOrFail($id);
        $hopital->delete();

        return response()->json(['status' => 'Membre de la famille supprimé avec succes']);
    }
}
