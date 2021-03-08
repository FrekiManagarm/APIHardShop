<?php

namespace App\Http\Controllers;

use App\Models\Carte_Mere;
use Illuminate\Http\Request;

class CarteMereController extends Controller
{
    public function index() {
        return Carte_Mere::all();
    }

    public function show(Carte_Mere $carte_Mere) {
        return $carte_Mere;
    }

    public function store(Request $request) {
        $this->validate($request, [
            'chipset' => 'required',
            'constructeur' => 'required',
            'format' => 'required',
            'fréquence_mémoire' => 'required',
            'image' => 'required'
        ]);

        $carte_Mere = Carte_Mere::creating($request->all());

        return response()->json($carte_Mere, 201);
    }

    public function update(Request $request, Carte_Mere $carte_Mere) {
        $carte_Mere->update($request->all());

        return response()->json($carte_Mere, 200);
    }

    public function delete(Carte_Mere $carte_Mere) {
        $carte_Mere->delete();
        return response()->json(null, 204);
    }
}
