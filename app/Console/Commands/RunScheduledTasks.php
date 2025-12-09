<?php
namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Task;
use App\Jobs\ExecuteTask;

class RunScheduledTasks extends Command
{
    protected $signature = 'tasks:run';
    protected $description = 'Run all pending tasks whose scheduled time has arrived';

    public function handle(): void
    {
        $tasks = Task::where('status', 'pending')
                     ->where('scheduled_at', '<=', now())
                     ->get();

        foreach ($tasks as $task) {
            ExecuteTask::dispatch($task);
        }
    }
}
