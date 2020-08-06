<?php

namespace App\Events;

use stdClass;

class ShuttleJobEvent extends Event
{
    public $request;
    private $callback;

    /**
     * Create a new event instance.
     *
     * @param      $request
     */
    public function __construct(stdClass $request)
    {
        $this->request = $request;
    }
}
