<?php

namespace Infrastructure\Repository;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Usecase\User\UserRepository as IUserRepository;

class UserRepository implements IUserRepository
{

    protected $user;

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