<?php

namespace App\Listeners;

use App\Events\ShuttleJobEvent;
use App\Jobs\ShuttleJob;

class ShuttleJobListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param ShuttleJobEvent $shuttle
     *
     * @return void
     */
    public function handle(ShuttleJobEvent $shuttle)
    {
        $job = [
            'task'      => $shuttle->job->task,
            'params'    => $shuttle->job->params,
            'success'   => $shuttle->job->success
        ];

        dispatch(new ShuttleJob($job))->onQueue($shuttle->job->queue);
    }
}
