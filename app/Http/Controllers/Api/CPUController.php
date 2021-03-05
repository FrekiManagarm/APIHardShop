<?php

namespace App\Http\Controllers;

use App\Models\Cooling;
use App\Models\CPU;
use Illuminate\Http\Request;

class CPUController extends Controller
{
    public function index() 
    {
        return CPU::all();
    }

    public function show(CPU $cPU)
    {
        return $cPU;
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'architecture' => 'required',
            'cache' => 'required',
            'image' => 'required|unique:CPUs|max:255',
            'chipset' => 'required',
            'chipset_graphique' => 'required',
            'frequence' => 'required',
            'frequence_boost' => 'required',
            'nb_coeur' => 'integer|required',
            'nb_threads' => 'integer|required',
            'nom' => 'required|unique:CPUs|max:255',
            'overclocking' => 'boolean|required',
            'socket' => 'required',
            'type' => 'required'
        ]);

        $cPU = CPU::creating($request->all());

        return response()->json($cPU, 201);
    }

    public function update(Request $request, CPU $cPU) 
    {
        $cPU->update($request->all());

        return response()->json($cPU, 200);
    }

    public function delete(CPU $cPU)
    {
        $cPU->delete();
        return response()->json(null, 204);
    } 
}
