<?php

namespace App\Listeners;

use App\Events\BroadcastJobEvent;
use App\Jobs\BroadcastJob;

class BroadcastJobListener
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
     * @param BroadcastJobEvent $broadcast
     *
     * @return void
     */
    public function handle(BroadcastJobEvent $broadcast)
    {
        $job = [
            'task'      => $broadcast->job->task,
            'params'    => $broadcast->job->params,
            'success'   => $broadcast->job->success,
            'message'   => empty($broadcast->job->message) ? null : $broadcast->job->message
        ];

        dispatch(new BroadcastJob($job))->onQueue($broadcast->job->queue);
    }
}
