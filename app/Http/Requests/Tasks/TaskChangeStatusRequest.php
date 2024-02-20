<?php

namespace App\Http\Requests\Tasks;

use App\Enums\TaskStatus;
use App\Models\Tasks\Task;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TaskChangeStatusRequest extends FormRequest
{

    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'status' => 'required|in:' . implode(',', [TaskStatus::INITIAL, TaskStatus::COMPLETED, TaskStatus::WORKING_ON])
        ];
    }

}
