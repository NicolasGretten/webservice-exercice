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
     * @param ShuttleJobEvent $request
     *
     * @return void
     */
    public function handle(ShuttleJobEvent $request)
    {
        // todo : check values
        dispatch(new ShuttleJob([
            'task_action' => $request->request->callback['task_action'],
            'request' => $request->request->callback['request'],
        ]))->onQueue($request->request->callback['on_queue']);
    }
}
