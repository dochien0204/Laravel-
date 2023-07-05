<?php

namespace App\Repositories;

use App\Interfaces\IUserRepository;
use App\Models\Post;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserRepository implements IUserRepository {
    
    public function register(Request $request) {
        try {
            Post::create([
                'title' => 'A',
                'content' => 'content A',
                'is_published' => true,
            ]);
            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
            return $user;
        } catch (Exception $ex) {
            return false;
        }
    }
}