<?php

namespace App\Http\Presenter\User;

use League\Fractal\TransformerAbstract;

class Presenter extends TransformerAbstract {

    public function transform($user) {
        return [
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email
        ];
    }
}