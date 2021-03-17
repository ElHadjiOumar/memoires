<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {

        return view('admin.user.index');
    }

    public function edit()
    {

        return view('admin.user.edit');
    }

    public function update(Request $request, $id)
    {

        $users = User::find($id);

        $users->matricule = $request->input('matricule');
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->statut = $request->input('statut');
        $users->date_embauche = $request->input('date_embauche');
        $users->date_fincontrat = $request->input('date_fincontrat');
        $users->date_nais = $request->input('date_nais');
        $users->poste = $request->input('poste');
        $users->usertype = $request->input('usertype');
        $users->email = $request->input('email');
        $users->update();

        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./role-register/'))->with('status', 'L utilisateur à été mise à jour');
    }

    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return response()->json(['status' => 'Utilisateur supprimé avec succes']);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {

        $users = new User();
        $users->matricule = $request->input('matricule');
        $users->nom = $request->input('nom');
        $users->prenom = $request->input('prenom');
        $users->statut = $request->input('statut');
        $users->date_embauche = $request->input('date_embauche');
        $users->date_fincontrat = $request->input('date_fincontrat');
        $users->date_nais = $request->input('date_nais');
        $users->poste = $request->input('poste');
        $users->usertype = $request->input('usertype');
        $users->email = $request->input('email');
        $users->password = Hash::make($request->input('password'));



        $users->save();
        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./role-register/'))->with('status', 'L utilisateur a été ajouté avec success');
    }
}
