<?php

declare(strict_types=1);

namespace App\Actions\Account\Auth;

use App\Repositories\Account\Auth\AuthRepositoryInterface;

final class ShowUserAction
{
    private $authRepository;

    public function __construct(AuthRepositoryInterface $authRepository)
    {
        $this->authRepository = $authRepository;
    }

    public function execute()
    {
        return $this->authRepository->showUser();
    }
}
