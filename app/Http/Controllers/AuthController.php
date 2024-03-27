<?php

namespace App\Http\Controllers;

<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
=======
use Illuminate\Http\JsonResponse;
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a

class AuthController extends Controller
{
    /**
     * Get a JWT via given credentials.
     *
<<<<<<< HEAD
     * @return \Illuminate\Http\JsonResponse
=======
     * @return JsonResponse
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
     */
    public function login()
    {
        $credentials = request(['email', 'password']);

        if (! $token = auth()->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }

<<<<<<< HEAD
    protected function respondWithToken($token)
=======
    protected function respondWithToken($token): JsonResponse
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ]);
    }
}
