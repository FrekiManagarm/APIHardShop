<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\GPUCreateRequest;
use App\Http\Requests\GPUUpdateRequest;
use App\Http\Resources\GPUResource;
use App\Models\GPU;
use Illuminate\Http\Request;

class GPUController extends Controller
{
    public function index() {
        return GPUResource::collection(GPU::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $gpu = GPU::where('id', $id)->first();

        return (new GPUResource($gpu))->response()->setStatusCode(200);
    }

    public function store(GPUCreateRequest $request) {
        $gpu = GPU::create($request->validated());

        return (new GPUResource($gpu))->response()->setStatusCode(201);
    }

    public function update(GPU $gpu, GPUUpdateRequest $request) {
        $cg = GPU::where('id', $gpu->id);

        $cg->update($request->validated());

        return (new GPUResource($cg))->response()->setStatusCode(203);
    }

    public function delete(GPU $gpu) {
        $this->authorize('update', $gpu);

        $gpu->delete();

        return response()->json(null, 204);
    }
}
