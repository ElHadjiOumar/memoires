<?php

namespace App\Http\Controllers;

use App\Models\Fraismedics;
use App\Models\Prisecharge;
use App\Models\User;
use Illuminate\Http\Request;


class FraismedicsController extends Controller
{
    public function index()
    {

        return view('admin.fraismedicaux.index');
    }

    public function create()
    {
        return view('admin.fraismedicaux.create');
    }
    public function createFam()
    {
        return view('admin.fraismedicaux.famille');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $lastid = Prisecharge::create($data)->id;
        if (count($request->nom) > 0) {
            foreach ($request->nom as $item => $v) {

                $data2 = array(
                    'prisecharge_id' => $lastid,
                    'nom' => $request->nom[$item],
                    'montant' => $request->montant[$item],
                );

                Fraismedics::insert($data2);
            }
        }
        $value = 'success';
        $request->session()->flash('statuscode', $value);
        return redirect(url('./role-register'))->with('status', 'Frais Medicaux enregistrés avec success');
    }
}
