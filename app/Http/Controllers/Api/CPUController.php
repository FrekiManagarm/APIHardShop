<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CPUCreateRequest;
use App\Http\Requests\CPUUpdateRequest;
use App\Http\Resources\CPUResource;
use App\Models\CPU;
use Illuminate\Http\Request;

class CPUController extends Controller
{
    public function index() {
        return CPUResource::collection(CPU::all())->response()->setStatusCode(200);
    }

    public function byType($proco) {
        $cpu = CPU::where('type', $proco)->get();

        return CPUResource::collection($cpu)->response()->setStatusCode(200);
    }

    public function show($id) {
        $cpu = CPU::where('id', $id)->first();

        return (new CPUResource($cpu))->response()->setStatusCode(200);
    }

    public function store(CPUCreateRequest $request) {
        $cpu = CPU::create($request->validated());

        return (new CPUResource($cpu))->response()->setStatusCode(201);
    }

    public function update(CPU $cpu, CPUUpdateRequest $request) {
        $proc = CPU::where('id', $cpu->id);

        $proc->update($request->validated());

        return (new CPUResource($proc))->response()->setStatusCode(203);
    }

    public function delete(CPU $cpu) {
        $this->authorize('update', $cpu);

        $cpu->delete();

        return response()->json(null, 204);
    }
}
