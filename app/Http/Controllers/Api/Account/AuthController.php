<?php

namespace App\Http\Controllers;

use App\Actions\Account\Auth\LoginAction;
use App\Actions\Account\Auth\LogoutAction;
use App\Actions\Account\Auth\RegisterAction;
use App\Actions\Account\Auth\ShowUserAction;
use App\Actions\Account\Auth\UpdateAction;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\JsonResponse;
use App\Models\AccountModels\User;
class AuthController extends Controller
{
    private $registerUser;
    private $loginUser;
    private $logoutUser;
    private $showUser;
    private $updateUser;

    public function __construct(
        RegisterAction $registerUser,
        LoginAction $loginUser,
        LogoutAction $logoutUser,
        ShowUserAction $showUser,
        UpdateAction  $updateUser
    ) {
        $this->registerUser = $registerUser;
        $this->loginUser    =  $loginUser;
        $this->logoutUser   =  $logoutUser;
        $this->showUser     =  $showUser;
        $this->updateUser = $updateUser;
    }

    public function register(RegisterRequest $request)
    {
        $user = $this->registerUser->execute($request);
        $token = $user->createToken('shop-token')->plainTextToken;
        $response = ['user' => $user, 'token' => $token];
        return response($response, JsonResponse::HTTP_CREATED);
    }

    public function login(LoginRequest $request)
    {
        return $this->loginUser->execute($request);
    }

    public function me()
    {
        $response = $this->showUser->execute();
        return response($response, JsonResponse::HTTP_OK);
    }

    public function update(UpdateUserRequest $request)
    {
        $response = $this->updateUser->execute($request);
        return response($response, JsonResponse::HTTP_OK);
    }

    public function logout(User $user)
    {
        $this->logoutUser->execute($user);
        return response(null, JsonResponse::HTTP_NO_CONTENT);
    }
}
