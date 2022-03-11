<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\BoitierCreateRequest;
use App\Http\Requests\BoitierUpdateRequest;
use App\Http\Resources\BoitierResource;
use App\Models\Boitier;
use Illuminate\Http\Request;

class BoitierController extends Controller
{
    public function index() {
        return BoitierResource::collection(Boitier::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $case = Boitier::where('boitiers.id', $id)->get();

        return (new BoitierResource($case))->response()->setStatusCode(200);
    }

    public function store(BoitierCreateRequest $request) {
        $case = Boitier::create($request->validated());

        return (new BoitierResource($case))->response()->setStatusCode(201);
    }

    public function update(Boitier $boitier, BoitierUpdateRequest $request) {
        $case = Boitier::where('boitiers.id', $boitier->id);

        $case->update($request->validated());

        return (new BoitierResource($case))->response()->setStatusCode(203);
    }

    public function delete(Boitier $boitier) {
        $this->authorize('update', $boitier);

        $boitier->delete();

        return response()->json(null, 204);
    }
}
