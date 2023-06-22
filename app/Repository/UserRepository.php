<?php

namespace App\Repository;

use App\Models\User;
use App\Service\User\UserRepository as IUserRepository;
use Illuminate\Support\Facades\DB;

class UserRepository implements IUserRepository {
    protected User $user;
    
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    public function getAllUser()
    {
        $listUser = DB::table('users')->get();
        return $listUser;   
    }
}