<?php

namespace App\Models\Tasks;

use App\Events\TaskStatusChangedEvent;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = [
        "name",
        "description",
        "status"
    ];

    public static function booted()
    {
        parent::boot();

        parent::updated(function ($model) {
            $changes = array_diff($model->getOriginal(), $model->getAttributes());

            if (isset($changes['status'])) {
                TaskStatusChangedEvent::dispatch($model);
            }
        });
    }
}
