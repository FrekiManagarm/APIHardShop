<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\RAMCreateRequest;
use App\Http\Requests\RAMUpdateRequest;
use App\Http\Resources\RAMResource;
use App\Models\RAM;
use Illuminate\Http\Request;

class RAMController extends Controller
{
    public function index() {
        return RAMResource::collection(RAM::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $ram = RAM::where('RAMs.id', $id)->get();

        return (new RAMResource($ram))->response()->setStatusCode(200);
    }

    public function store(RAMCreateRequest $request) {
        $ram = RAM::create($request->validated());

        return (new RAMResource($ram))->response()->setStatusCode(201);
    }

    public function interface($interface) {
        $ram = RAM::where('RAMs.interface', $interface)->get();

        return RAMResource::collection($ram)->response()->setStatusCode(200);
    }

    public function capacity($capacity) {
        $ram = RAM::where('RAMs.capcité', $capacity)->get();

        return RAMResource::collection($ram)->response()->setStatusCode(200);
    }

    public function update(RAM $ram, RAMUpdateRequest $request) {
        $mem = RAM::where('RAMs.id', $ram->id);

        $mem->update($request->validated());

        return (new RAMResource($mem))->response()->setStatusCode(203);
    }

    public function delete(RAM $ram) {
        $this->authorize('update', $ram);

        $ram->delete();

        return response()->json(null, 204);
    }
}
