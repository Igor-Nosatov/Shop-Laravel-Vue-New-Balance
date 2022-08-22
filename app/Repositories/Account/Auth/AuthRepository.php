<?php

namespace App\Repositories\Account\Auth;

use App\Repositories\Account\Auth\AuthRepositoryInterface;
use App\Models\Account\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthRepositoryInterface
{
    public function registerUser(User $user): User
    {
        $user->save();
        return $user;
    }

    public function loginUser(LoginRequest $request)
    {
        $user = User::where('email', $request['email'])->first();
        if (!$user || !Hash::check($request['password'], $user->password)) {
            return response([
                'message' => 'Bad creds',
            ], 401);
        }
        $token = $user->createToken('conference-token')->plainTextToken;
        $response = [
            'user' => $user,
            'token' => $token,
        ];
        return response($response, 200);
    }

    public function logoutUser()
    {
        Auth::user()->tokens()->delete();
        return response()->json([
            'message' => 'Successfully logged out'
        ]);
    }

    public function updateUser(UpdateUserRequest $request)
    {
      $user = User::findOrFail(Auth::id());
      return $user->update($request->all());
    }


    public function showUser()
    {
        $user = Auth::user()->role->name;
        return response()->json($user);
    }

}