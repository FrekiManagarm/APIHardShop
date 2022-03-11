<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(UserCreateRequest $request) {
        $validated = $request->validated();
        $validated['password'] = bcrypt($request->password);
        $validated['firstname'] = ucfirst($request->firstname);
        $validated['lastname'] = ucfirst($request->lastname);

        $user = User::create($validated);

        $token = $user->createToken('Laravel-9-Passport-Auth')->accessToken;

        $response = ['user' => new UserResource($user), 'token' => $token];

        return response($response, 201);
    }

    public function login(Request $request) {

        if (Auth::guard('web')->attempt(['email' => request('email'), 'password' => request('password')])) {

            $userAuth = Auth::guard('web')->user();

            $token = $userAuth->createToken('Laravel-9-Passport-Auth')->accessToken;

            $response = ['token' => $token, 'user' => new UserResource($userAuth)];

            return response($response, 200);
        } else {
            $response = ['message' => 'Wrong email or password'];
            return response()->json($response, 422);
        }
    }

    public function userInfo() {
        $user = auth()->user();

        return response()->json(['user' => $user], 200);
    }

    public function logout(Request $request) {
        $token = $request->user()->token();
        $token->revoke();

        $response = 'You have been successfully logged out.';
        return response()->json($response, 200);
    }
}
