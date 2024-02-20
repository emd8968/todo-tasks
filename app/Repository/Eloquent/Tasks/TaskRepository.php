<?php

namespace App\Repository\Eloquent\Tasks;

use App\Enums\TaskStatus;
use App\Models\Tasks\Task;
use App\Repository\Eloquent\Base;
use App\Repository\Interfaces\Tasks\TaskRepositoryInterface;
use Carbon\Carbon;

class TaskRepository extends Base implements TaskRepositoryInterface
{

    /**
     * @param Task $model
     */
    public function __construct(Task $model)
    {
        parent::__construct($model);
    }

    public function completeOldTasks(int $ageInDays): int
    {
        return $this->model->query()
            ->where('created_at', '<=', (Carbon::now()->subDays($ageInDays)))
            ->update([
                "status" => TaskStatus::COMPLETED
            ]);
    }

}
