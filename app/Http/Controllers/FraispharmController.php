<?php

namespace App\Http\Controllers;

use App\Models\Fraispharms;
use App\Models\Prisechargespharms;
use Illuminate\Http\Request;

class FraispharmController extends Controller
{
    public function index()
    {
        return view('admin.fraispharm.index');
    }
    public function create()
    {
        return view('admin.fraispharm.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $lastid = Prisechargespharms::create($data)->id;
        if (count($request->nom) > 0) {
            foreach ($request->nom as $item => $v) {
                $data2 = array(
                    'prisechargespharms_id' => $lastid,
                    'nom' => $request->nom[$item],
                    'prix' => $request->prix[$item],
                    'qt' => $request->qt[$item],
                    'montant' => $request->montant[$item],
                );
                Fraispharms::insert($data2);
            }
        }
        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./role-register'))->with('status', 'Frais Pharmaceutiques enregistrés avec success');
    }
}
