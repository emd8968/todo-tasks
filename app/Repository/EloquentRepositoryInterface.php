<?php

namespace App\Repository;

use Illuminate\Database\Eloquent\Model;

interface EloquentRepositoryInterface
{

    /**
     * @param array $attributes
     * @return Model
     */
    public function create(array $attributes): Model;

    /**
     * @param mixed $id
     * @param array $attributes
     * @return Model
     */
    public function update(mixed $id, array $attributes): Model;

}
