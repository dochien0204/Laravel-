<?php

namespace App\Repository;

use App\Models\User;
use App\Service\User\UserRepository as IUserRepository;
use Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
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

    public function getUserById(int $id)
    {
        try {
            $user = DB::table('users')->where('id', $id)->first();
            return $user;    
        } catch (ModelNotFoundException $exc) {
            return false;
        }
    }

    public function createUser($data)
    {
        try {
            $user = User::create($data);
            return $user;
        } catch (QueryException $exc) {
            report($exc);
            return false;
        }
    }
}