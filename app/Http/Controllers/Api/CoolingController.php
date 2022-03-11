<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CoolingCreateRequest;
use App\Http\Requests\CoolingUpdateRequest;
use App\Http\Resources\CoolingResource;
use App\Models\Cooling;
use Illuminate\Http\Request;

class CoolingController extends Controller
{
    public function index() {
        return CoolingResource::collection(Cooling::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $cooling = Cooling::where('Coolings.id', $id)->get();

        return (new CoolingResource($cooling))->response()->setStatusCode(200);
    }

    public function byFormat($format) {
        $cooling = Cooling::where('Coolings.format', $format)->get();

        return CoolingResource::collection($cooling)->response()->setStatusCode(200);
    }

    public function bySocket($socket) {
        $cooling = Cooling::where('Coolings.socket', $socket)->get();

        return CoolingResource::collection($cooling)->response()->setStatusCode(200);
    }

    public function byType($type) {
        $cool = Cooling::where('Coolings.type', $type)->get();

        return CoolingResource::collection($cool)->response()->setStatusCode(200);
    }

    public function store(CoolingCreateRequest $request) {
        $cooling = Cooling::create($request->validated());

        return (new CoolingResource($cooling))->response()->setStatusCode(201);
    }

    public function update(Cooling $cooling, CoolingUpdateRequest $request) {
        $cool = Cooling::where('Coolings.id', $cooling->id);

        $cool->update($request->validated());

        return (new CoolingResource($cool))->response()->setStatusCode(203);
    }

    public function delete(Cooling $cooling) {
        $this->authorize('update', $cooling);

        $cooling->delete();

        return response()->json(null, 204);
    }
}
