<?php

namespace App\Console\Commands;

use App\Repository\Interfaces\Tasks\TaskRepositoryInterface;
use Illuminate\Console\Command;

class CompleteOldTasks extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:complete-old-tasks';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle(TaskRepositoryInterface $repository)
    {
        $count = $repository->completeOldTasks(2);

        echo "$count number of tasks completed!";
    }
}
