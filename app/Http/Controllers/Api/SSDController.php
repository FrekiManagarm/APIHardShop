<?php

namespace App\Http\Controllers;

use App\Models\SSD;
use Illuminate\Http\Request;

class SSDController extends Controller
{
    public function index()
    {
        return SSD::all();
    }

    public function show(SSD $sSD)
    {
        return $sSD;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'capacité' => 'required',
            'connectique' => 'required',
            'format' => 'required',
            'image' => 'required|unique:SSDs|max:200',
            'interface' => 'required',
            'lecture' => 'required',
            'marque' => 'required',
            'nom' => 'required|unique:SSDs|max:200',
            'écriture' => 'required'
        ]);

        $sSD = SSD::creating($request->all());

        return response()->json($sSD, 201);
    }

    public function update(Request $request, SSD $sSD)
    {
        $sSD->update($request->all());

        return response()->json($sSD, 200);
    }

    public function delete(SSD $sSD)
    {
        $sSD->delete();
        
        return response()->json(null, 204);
    }
}
