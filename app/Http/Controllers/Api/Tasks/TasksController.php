<?php

namespace App\Http\Controllers\Api\Tasks;

use App\Http\Controllers\Controller;
use App\Http\Requests\Tasks\TaskChangeStatusRequest;
use App\Http\Requests\Tasks\TaskCreateRequest;
use App\Repository\Interfaces\Tasks\TaskRepositoryInterface;

class TasksController extends Controller
{

    /**
     * @param TaskCreateRequest $request
     * @param TaskRepositoryInterface $repository
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function store(TaskCreateRequest $request, TaskRepositoryInterface $repository)
    {
        $attributes = $request->all();
        return $repository->create($attributes);
    }

    /**
     * @param TaskChangeStatusRequest $request
     * @param TaskRepositoryInterface $repository
     * @param $taskId
     * @return \Illuminate\Database\Eloquent\Model
     */
    public function setStatus(TaskChangeStatusRequest $request, TaskRepositoryInterface $repository, $taskId)
    {
        return $repository->update($taskId, ['status' => $request->get('status')]);
    }

}
