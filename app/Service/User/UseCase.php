<?php

namespace App\Service\User;

interface UserRepository 
{
    public function getAllUser();
}

interface UseCase {
    public function getAllUser();
}
