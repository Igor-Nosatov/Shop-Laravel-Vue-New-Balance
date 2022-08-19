<?php

namespace App\Repositories\Account\Auth;
use Illuminate\Http\Request;
use App\Models\AccountModels\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\UpdateUserRequest;
interface AuthRepositoryInterface
{
    public function registerUser(User $user): User;
    public function loginUser(LoginRequest $request);
    public function updateUser(UpdateUserRequest $request);
    public function logoutUser();
    public function showUser();

}
