<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\ConfigCreateRequest;
use App\Http\Requests\ConfigUpdateRequest;
use App\Http\Resources\ConfigResource;
use App\Models\Config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConfigController extends Controller
{
    public function index() {
        return ConfigResource::collection(Config::all())->response()->setStatusCode(200);
    }

    public function show($id) {
        $config = Config::where('config.id', $id)
        ->with([
            'user',
            'cpu',
            'motherboard',
            'cooling',
            'ssd',
            'hdd',
            'gpu',
            'psu',
            'ram',
            'boitier'
        ])
        ->where("status", "done")
        ->get();

        return (new ConfigResource($config))->response()->setStatusCode(200);
    }

    public function myConfigs() {
        $user = Auth::user();
        $configs = Config::with([
            "cpu",
            "motherboard",
            "cooling",
            "ssd",
            "gpu",
            "psu",
            "ram",
            "hdd",
            "boitier"
        ])->where("user_id", $user->id)->get();

        return ConfigResource::collection($configs)->response()->setStatusCode(200);
    }

    public function createDraft(ConfigCreateRequest $request) {
        $user = Auth::user();

        $conf = Config::create($request->validated());

        return (new ConfigResource($conf))->response()->setStatusCode(201);
    }

    public function pushToDraft($config, ConfigUpdateRequest $request) {

        $conf = Config::where('id', $config)->get();

        $conf->update($request->validated());

        return (new ConfigResource($conf))->response()->setStatusCode(201);
    }

    public function draftToConfig($id, ConfigUpdateRequest $request) {

        $config = Config::where('id', $id)->get();

        $config->update($request->validated());

        return (new ConfigResource($config))->response()->setStatusCode(203);
    }

    public function store(ConfigCreateRequest $request) {
        $config = Config::create($request->validated());

        return (new ConfigResource($config))->response()->setStatusCode(201);
    }

    public function update(Config $config, ConfigUpdateRequest $request) {
        $conf = Config::where('config.id', $config->id);

        $conf->update($request->validated());

        return (new ConfigResource($conf))->response()->setStatusCode(203);
    }

    public function delete(Config $config) {
        $this->authorize('update', $config);

        $config->delete();

        return response()->json(null, 204);
    }
}
