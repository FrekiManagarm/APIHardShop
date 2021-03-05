<?php

namespace App\Http\Controllers;

use App\Models\HDD;
use Illuminate\Http\Request;

class HDDController extends Controller
{
    public function index()
    {
        return HDD::all();
    }

    public function show(HDD $hDD) 
    {
        return $hDD;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'RPM' => 'integer|required',
            'capacité' => 'required',
            'format' => 'required',
            'image' => 'required|unique:HDDs|max:255',
            'interface' => 'required',
            'mémoire_cache' => 'required',
            'nom' => 'required|unique:HDDs|max:200',
            'transfert' => 'required'     
        ]);

        $hDD = HDD::creating($request->all());

        return response()->json($hDD, 201);
    }

    public function update(Request $request, HDD $hDD) {
        $hDD->update($request->all());
        return response()->json($hDD, 200);
    }

    public function delete(HDD $hDD)
    {
        $hDD->delete();
        return response()->json(null, 204);
    }
}
