<?php 

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Payload\User\CreateUserPayLoad;
use App\Service\User\UseCase as UserService;
use Illuminate\Http\Response;

class UserController extends Controller {

    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAllUser()
    {
        $listUser = $this->userService->getAllUser();
        $data = Common::convertListUserModelToPresenter($listUser);
        $response = [
            'status' => strval(Response::HTTP_OK),
            'message' => 'SUCCESS',
            'results' => $data
        ];

        return response()->json($response);
    }

    public function createUser(CreateUserPayLoad $request) {
        
    }
}