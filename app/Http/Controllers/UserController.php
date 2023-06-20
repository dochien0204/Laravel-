<?php

namespace App\Http\Controllers;

use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserResourceCollection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $users = User::all();
        $resource = UserResource::collection($users);
        return new UserResourceCollection($resource);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = json_decode($request->getContent());

        $user = new User();
        $user->username = $data->username;
        $user->password = $data->password;
        $user->full_name = $data->fullName;
        $user->email = $data->email;
        $user->save();
        return response()->json([
            'status' => 200,
            'message' => 'SUCCESS',
            'data' => new UserResource($user)
        ], 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $id = $request->userId;
        $user = DB::table('users') -> where('id', $id) -> first();
        return response() -> json([
            'status'=> '200',
            'message' => 'SUCCESS',
            'data' => new UserResource($user)
        ]);

        return response() -> json([
            'status'=> '200',
            'message' => 'SUCCESS',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        //
        $data = json_decode($request->getContent());
        
        $user = User::find($data->userId);
        $user->username = $data->username;
        $user->password = $data->password;
        $user->full_name = $data->fullName;
        $user->email = $data->email;
        $user->save();
    }

    /**
     * Update the specified resource in storage.
     */
    // public function update(Request $request)
    // {
    //     //
    //     $id = $request -> userId;
    //     $user = DB::table('users') -> where('id', $id). update

    // }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        //
        $id = $request -> userId;
        DB::table('users')->delete($id);
        return response() -> json([
            'status'=> '200',
            'message' => 'SUCCESS',
        ]);
    }
}
