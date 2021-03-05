<?php

namespace App\Http\Controllers;

use App\Models\PSU;
use Illuminate\Http\Request;

class PSUController extends Controller
{
    public function index()
    {
        return PSU::all();
    }

    public function show(PSU $pSU)
    {
        return $pSU;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'certif' => 'required',
            'format' => 'required',
            'image' => 'required|unique:PSUs|max:200',
            'marque' => 'required',
            'modulaire' => 'boolean',
            'nom' => 'required|unique:200|max:200',
            'puissance' => 'required'
        ]);

        $pSU = PSU::creating($request->all());

        return response()->json($pSU, 201);
    }

    public function update(Request $request, PSU $pSU)
    {
        $pSU->update($request->all());

        return response()->json($pSU, 200);
    }

    public function delete(PSU $pSU)
    {
        $pSU->delete();
        return response()->json(null, 204);
    }
}
