<?php

namespace Infrastructure\Repository;

use Illuminate\Database\Eloquent\Model;

abstract class BaseRepository  {
    protected $model;

    //contructor
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function find($id) : ?Model
    {
        return $this->model->find($id);
    }
}