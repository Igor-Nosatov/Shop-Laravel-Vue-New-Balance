<?php

declare(strict_types=1);

namespace App\Actions\Account\Auth;

use App\Repositories\Account\Auth\AuthRepositoryInterface;
use App\Http\Requests\UpdateUserRequest;

final class UpdateAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute(UpdateUserRequest $request)
    {
        return $this->authRepository->updateUser($request);
    }
}
