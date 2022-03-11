<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\HDDCreateRequest;
use App\Http\Requests\HDDUpdateRequest;
use App\Http\Resources\HDDResource;
use App\Models\HDD;
use Illuminate\Http\Request;

class HDDController extends Controller
{
    public function index() {
        return HDDResource::collection(HDD::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $hdd = HDD::where('HDDs.id', $id)->get();

        return (new HDDResource($hdd))->response()->setStatusCode(200);
    }

    public function capacity($capacity) {
        $hdd = HDD::where('HDDs.capacité', $capacity)->get();

        return HDDResource::collection($hdd)->response()->setStatusCode(200);
    }

    public function store(HDDCreateRequest $request) {
        $hdd = HDD::create($request->validated());

        return (new HDDResource($hdd))->response()->setStatusCode(201);
    }

    public function update(HDD $hdd, HDDUpdateRequest $request) {
        $disque = HDD::where('HDDs.id', $hdd->id);

        $disque->update($request->validated());

        return (new HDDResource($disque))->response()->setStatusCode(203);
    }

    public function delete(HDD $hdd) {
        $this->authorize('update', $hdd);

        $hdd->delete();

        return response()->json(null, 204);
    }
}
