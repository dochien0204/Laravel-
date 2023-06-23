<?php

namespace App\Http\Presenter\User;

use App\Models\User;
use League\Fractal\TransformerAbstract;

class Presenter 
{
    public static function UserPresenterBasic() {
        return new UserPresenterBasic();
    }
    
    public static function UserPresenterWithoutId() {
        return new UserPresenterWithoutId();
    }
}

class UserPresenterBasic extends TransformerAbstract {
    public function transform($user)
    {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}

class UserPresenterWithoutId extends TransformerAbstract {
    public function transform($user)
    {
        return [
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}