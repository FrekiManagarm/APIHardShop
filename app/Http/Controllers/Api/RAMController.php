<?php

namespace App\Http\Controllers;

use App\Models\RAM;
use Illuminate\Http\Request;

class RAMController extends Controller
{
    public function index()
    {
        return RAM::all();
    }

    public function show(RAM $rAM)
    {
        return $rAM;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacité' => 'required',
            'fréquence' => 'required',
            'image' => 'required|unique:RAMs|max:200',
            'interface' => 'required',
            'latence' => 'required',
            'marque' => 'required',
            'nom' => 'required|unique:RAMs|max:200',
            'quantité' => 'required'
        ]);

        $rAM = RAM::creating($request->all());

        return response()->json($rAM, 201);
    }

    public function update(Request $request, RAM $rAM)
    {
        $rAM->update($request->all());

        return response()->json($rAM, 200);
    }

    public function delete(RAM $rAM) 
    {
        $rAM->delete();

        return response()->json(null, 204);
    }
}
