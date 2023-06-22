<?php

namespace App\Http\Controllers\User;

use App\Http\Presenter\User\Presenter as UserPresenter;
use App\Models\User;
use League\Fractal\Resource\Item;
use League\Fractal\Manager;
use League\Fractal\Resource\Collection;
use \League\Fractal\Serializer\ArraySerializer;

class Common {
    public static function convertUserModelToPresenter(User $user) {
        $transformer = new UserPresenter();
        $resource = new Item($user, $transformer);
        $fractal = new Manager();
        $data = $fractal->createData($resource)->toArray();
        return $data['data'];
    }
    
    public static function convertListUserModelToPresenter($listUser) {
        $transformer = new UserPresenter();
        $resource = new Collection($listUser, $transformer);
        $fractal = new Manager();
        $data = $fractal->createData($resource)->toArray();
        return $data['data'];
    }
}

