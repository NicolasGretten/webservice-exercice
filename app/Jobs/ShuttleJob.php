<?php

namespace App\Jobs;

use App\Events\ShuttleJobEvent;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
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
            $response = new stdClass();

            /*
             * Get request from job
             */
            $job = json_decode($this->request);

            if(json_last_error()) {
                throw new Exception(json_last_error_msg(), 500);
            }

            /*
             * Load data into current request object
             */
            foreach($job->request as $param) {
                $request->{$param} = $param;
            }

            /*
             * Load callback into current request object
             */
            $response->callback = empty($job->callback) ? null : get_object_vars($job->callback);

            /*
             * Select task
             */
            switch($job->task_action) {
                /*
                 * Example
                 *
                 * case 'validate:login.id':
                 *    $response->data = (new AuthController())->retrieve($request);
                 *    // todo : Vérifier la réponse
                 * break;
                 */

                default:
                    throw new Exception('task ' . $job->task . ' unknown', 404);
                break;
            }

            /*
             * Send response with new Job
             */
            event(new ShuttleJobEvent($response));
        }
        catch(Exception $e) {
            log::debug($e->getMessage());
        }
    }

    public function failed(Exception $exception)
    {
        app()->captureException($exception);
    }
}
