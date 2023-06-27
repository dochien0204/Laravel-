<?php

namespace App\Service\User;

interface UserRepository 
{
    public function getAllUser();
    public function getUserById(int $id);
    public function createUser($data);
}

interface UseCase {
    public function getAllUser();
    public function getUserById(int $id);
    public function createUser($data);
}
