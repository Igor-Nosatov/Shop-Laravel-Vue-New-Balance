<?php

declare(strict_types=1);

namespace App\Actions\Account\Auth;

use App\Http\Requests\Auth\LoginRequest;
use App\Repositories\Account\Auth\AuthRepositoryInterface;

final class LoginAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute()
    {
        return $this->authRepository;
    }
}

