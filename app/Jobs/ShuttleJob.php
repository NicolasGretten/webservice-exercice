<?php

namespace App\Jobs;

use App\Http\Controllers\CustomerController;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use stdClass;

class ShuttleJob extends Job implements ShouldQueue
{
    private $request;
    private $currentJob;

    /**
     * Create a new job instance.
     *
     * @param $request
     */
    public function __construct(array $request)
    {
        $this->request = $request;
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws Exception
     */
    public function handle()
    {
        $callbackJob = new stdClass();

        try {
            $this->request = json_encode($this->request);

            /*
             * Get request from job
             */
            $this->currentJob = json_decode($this->request);

            if(json_last_error()) {
                throw new Exception(json_last_error_msg(), 500);
            }
        }
        catch(Exception $e) {}

        /*
         * Set job to response queue if it defined
         */
        if(! empty($this->currentJob->callback_queue)) {
            $callbackJob->queue = $this->currentJob->callback_queue;
        }

        /*
         * Set callback params to job if it defined
         */
        if(! empty($this->currentJob->callback_params)) {
            $callbackJob->params = $this->currentJob->callback_params;
        }

        try {
            /*
             * Select task
             */
            switch($this->currentJob->task) {
                /*
                 * Example
                 *
                case 'confirm:login_id':
                    CustomerController::ValidateLoginId($this->currentJob);
                    break;
                */
                default:
                    throw new Exception('task ' . $this->currentJob->task . ' unknown', 404);
                    break;
            }

        }
        catch(Exception $e) {}
    }

    public function failed($e)
    {
        log::error($e);
    }
}
