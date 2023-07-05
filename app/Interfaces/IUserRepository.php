<?php

namespace App\Interfaces; 

use Illuminate\Http\Request;

interface IUserRepository {
    public function register(Request $request);
}