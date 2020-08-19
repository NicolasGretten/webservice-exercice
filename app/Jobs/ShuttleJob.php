<?php

namespace App\Jobs;

use App\Events\ShuttleJobEvent;
use App\Http\Controllers\AuthController;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use stdClass;

class ShuttleJob extends Job implements ShouldQueue
{
    private $request;

    /**
     * Create a new job instance.
     *
     * @param $request
     */
    public function __construct(array $request)
    {
        $this->request = json_encode($request);
    }

    /**
     * Execute the job.
     *
     * @return void
     * @throws Exception
     */
    public function handle()
    {
        try {
            $request = new Request();
            $newJob = new stdClass();

            /*
             * Get request from job
             */
            $job = json_decode($this->request);

            if(json_last_error()) {
                throw new Exception(json_last_error_msg(), 500);
            }

            /*
             * Set job to response queue if it defined
             */
            if(! empty($job->callback_queue)) {
                $newJob->queue = $job->callback_queue;
            }

            /*
             * Select task
             */
            switch($job->task) {
                /*
                 * EXAMPLE
                 */
//                case 'validate:login_id':
//                    /*
//                     * Validate the params sent
//                     */
//                    $validator = Validator::make(get_object_vars($job->params), [
//                        'id' => 'required|string|size:25'
//                    ]);
//
//                    if ($validator->fails())
//                    {
//                        throw new Exception($validator->messages(), 409);
//                    }
//
//                    /*
//                     * Set params to Request
//                     */
//                    $request->id = $job->params->id;
//
//                    /*
//                     * Set task name
//                     */
//                    $newJob->task = 'confirm:login_id';
//
//                    /*
//                     * Set params to job
//                     */
//                    $newJob->params = new StdClass();
//                    $newJob->params->id = $job->params->id;
//
//                    /*
//                     * Check values and set success state
//                     */
//                    $newJob->success = (bool) (new AuthController())->retrieve($request)->getStatusCode() === 200;
//                    break;

                default:
                    throw new Exception('task ' . $job->task . ' unknown', 404);
                    break;
            }

            /*
             * Create new event with created job
             */
            event(new ShuttleJobEvent($newJob));
        }
        catch(Exception $e) {
            log::error($e);
        }
    }

    public function failed($e)
    {
        log::error($e);
    }
}
