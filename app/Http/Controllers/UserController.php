<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
<<<<<<< HEAD
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
=======
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
<<<<<<< HEAD
        $data = $request->only(["name","email","password"]);
        $data["password"] = Hash::make($data["password"]);
=======
        $data = $request->only(['name', 'email', 'password']);

        $data['password'] = Hash::make($data['password']);
>>>>>>> 7ee5ed741d13135d4182a9968e8f5dd3486b503a

        $user = User::create($data);

        return response()->json($user, Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
