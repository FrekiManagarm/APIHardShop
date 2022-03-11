<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\PSUCreateRequest;
use App\Http\Requests\PSUUpdateRequest;
use App\Http\Resources\PSUResource;
use App\Models\PSU;
use Illuminate\Http\Request;

class PSUController extends Controller
{
    public function index() {
        return PSUResource::collection(PSU::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $psu = PSU::where('PSUs.id', $id)->get();

        return (new PSUResource($psu))->response()->setStatusCode(200);
    }

    public function byPower($power) {
        $psu = PSU::where('PSUs.puissance', $power)->get();

        return PSUResource::collection($psu)->response()->setStatusCode(200);
    }

    public function byFormat($format) {
        $psu = PSU::where('PSUs.format', $format)->get();

        return PSUResource::collection($psu)->response()->setStatusCode(200);
    }

    public function store(PSUCreateRequest $request) {
        $psu = PSU::create($request->validated());

        return (new PSUResource($psu))->response()->setStatusCode(201);
    }

    public function update(PSU $psu, PSUUpdateRequest $request) {
        $alim = PSU::where('PSUs.id', $psu->id);

        $alim->update($request->validated());

        return (new PSUResource($alim))->response()->setStatusCode(203);
    }

    public function delete(PSU $psu) {
        $this->authorize('update', $psu);

        $psu->delete();

        return response()->json(null, 204);
    }
}
