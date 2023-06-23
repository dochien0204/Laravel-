<?php

namespace App\Service\User;

interface UserRepository 
{
    public function getAllUser();
    public function getUserById(int $id);
}

interface UseCase {
    public function getAllUser();
    public function getUserById(int $id);
}
