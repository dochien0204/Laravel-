<?php

namespace App\Service\User;

use App\Repository\UserRepository;
use App\Service\User\UseCase;

class UserService implements UseCase {

    protected UserRepository $userRepository;

    public function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function getAllUser()
    {
        return $this->userRepository->getAllUser();
    }

    public function getUserById(int $id)
    {
        $user = $this->userRepository->getUserById($id);
        if (!$user) {
            return false;
        } 

        return $user;
    }
}