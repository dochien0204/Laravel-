<?php

namespace Usecase\User;
use Infrastructure\Repository\UserRepository;
use Usecase\User\UseCase;

class UserService implements UseCase {
    protected $userRepo;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepo = $userRepo;
    }

    
    public function getAllUser()
    {
        return $this->userRepo->getAllUser();
    }
}