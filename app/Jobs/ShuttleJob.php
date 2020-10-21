<?php

namespace App\Jobs;

use App\Traits\ShuttleConfirmationTrait;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Validation\ValidationException;
use stdClass;

class ShuttleJob extends Job implements ShouldQueue
{
    use ShuttleConfirmationTrait;

    private $request;
    private $currentJob;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public int $tries = 25;

    /**
     * The maximum number of exceptions to allow before failing.
     *
     * @var int
     */
    public int $maxExceptions = 3;

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
        catch(Exception $e) {
            report($e);
        }

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
                    $validator = Validator::make(get_object_vars($job->params), [
                        'customer_id' => 'required|string|size:25'
                    ]);

                    if ($validator->fails())
                    {
                        throw new ValidationException($validator);
                    }

                    CustomerController::ValidateLoginId($this->currentJob);
                    break;
                */
                default:
                    throw new Exception('task ' . $this->currentJob->task . ' unknown', 404);
                    break;
            }

        }
        catch(ValidationException $e) {
            report($e);
        }
        catch(Exception $e) {
            report($e);
        }
    }

    public function failed($e)
    {
        report($e);
    }
}
