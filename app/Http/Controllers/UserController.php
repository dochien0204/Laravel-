<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Usecase\User\UseCase as UserService;

class UserController extends Controller {

    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAllUser()
    {
        $listUser = $this->userService->getAllUser();
        return response()->json([
            'status' => '200',
            'message' => 'SUCCESS',
            'data' => $listUser
        ]);
    }
}