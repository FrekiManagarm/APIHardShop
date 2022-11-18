<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\MotherBoardCreateRequest;
use App\Http\Requests\MotherBoardUpdateRequest;
use App\Http\Resources\MotherBoardResource;
use App\Models\MotherBoard;
use Illuminate\Http\Request;

class MotherBoardController extends Controller
{
    public function index() {
        return MotherBoardResource::collection(MotherBoard::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $mb = MotherBoard::where('id', $id)->get();

        return (new MotherBoardResource($mb))->response()->setStatusCode(200);
    }

    public function procoCompatible($proco_compatible) {
        $mb = MotherBoard::where('proco_compatible', $proco_compatible)->get();

        return MotherBoardResource::collection($mb)->response()->setStatusCode(200);
    }

    public function byConstructor($constructor) {
        $mb = MotherBoard::where('constructeur', $constructor)->get();

        return MotherBoardResource::collection($mb)->response()->setStatusCode(200);
    }

    public function store(MotherBoardCreateRequest $request) {
        $mb = MotherBoard::create($request->validated());

        return (new MotherBoardResource($mb))->response()->setStatusCode(201);
    }

    public function update(MotherBoard $mb, MotherBoardUpdateRequest $request) {
        $mother = MotherBoard::where('id', $mb->id);

        $mother->update($request->validated());

        return (new MotherBoardResource($mb))->response()->setStatusCode(203);
    }

    public function delete(MotherBoard $mb) {
        $this->authorize('update', $mb);

        $mb->delete();

        return response()->json(null, 204);
    }
}
