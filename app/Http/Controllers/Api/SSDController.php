<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\SSDCreateRequest;
use App\Http\Requests\SSDUpdateRequest;
use App\Http\Resources\SSDResource;
use App\Models\SSD;
use Illuminate\Http\Request;

class SSDController extends Controller
{
    public function index() {
        return SSDResource::collection(SSD::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $ssd = SSD::where('SSDs.id', $id)->get();

        return (new SSDResource($ssd))->response()->setStatusCode(200);
    }

    public function store(SSDCreateRequest $request) {
        $ssd = SSD::create($request->validated());

        return (new SSDResource($ssd))->response()->setStatusCode(201);
    }

    public function update(SSD $ssd, SSDUpdateRequest $request) {
        $pcie = SSD::where('SSDs.id', $ssd->id);

        $pcie->update($request->validated());

        return (new SSDResource($pcie))->response()->setStatusCode(203);
    }

    public function delete(SSD $ssd) {
        $this->authorize('update', $ssd);

        $ssd->delete();

        return response()->json(null, 204);
    }
}
