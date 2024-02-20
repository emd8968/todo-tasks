<?php

namespace App\Services\Tasks;

use App\Enums\TaskStatus;
use App\Models\Tasks\Task;

class TasksService
{

    public function createTask($name, $description, $userId)
    {
        $task = new Task();
        $task->name = $name;
        $task->description = $description;
        $task->user_id = $userId;
        $task->status = TaskStatus::INITIAL;
        $task->save();

        return $task;
    }

    /**
     * @param Task $task
     * @param string $status
     * @return Task
     */
    public function changeTaskStatus($task, $status)
    {
        $task->status = $status;
        $task->save();

        return $task;
    }

}
