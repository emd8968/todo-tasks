<?php

namespace App\Http\Requests\Tasks;

use App\Enums\TaskStatus;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class TaskCreateRequest extends FormRequest
{

    public function authorize()
    {
        return Auth::check();
    }

    public function rules()
    {
        return [
            'name' => 'required|min:1|max:200',
            'status' => 'sometimes|required|in:' . implode(',', [TaskStatus::INITIAL, TaskStatus::COMPLETED, TaskStatus::WORKING_ON]),
            'description' => 'nullable|min:1|max:200'
        ];
    }

}
