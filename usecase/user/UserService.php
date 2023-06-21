<?php

namespace Usecase\User;
// use Usecase\User\UseCase;
// use Usecase\User\UserRepository;

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