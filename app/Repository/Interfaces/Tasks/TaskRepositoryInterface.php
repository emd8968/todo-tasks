<?php

namespace App\Repository\Interfaces\Tasks;

use Illuminate\Database\Eloquent\Model;

interface TaskRepositoryInterface
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

    /**
     * @param int $ageInDays
     * @return int
     */
    public function completeOldTasks(int $ageInDays): int;

}
