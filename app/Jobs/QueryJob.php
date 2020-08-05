<?php

namespace App\Jobs;

use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;

class QueryJob extends Job implements ShouldQueue
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
            $request = new \Illuminate\Http\Request;

            /*
             * Get request from job
             */
            $job = json_decode($this->request);

            if(json_last_error()) {
                throw new Exception(json_last_error_msg(), 500);
            }

            /*
             * Load data into request object
             */
            $request->replace(get_object_vars($job->request));

            /*
             * Load callback into request object
             */
            if(! empty($this->callback)) {
                $callback = json_decode($this->callback);

                if(json_last_error()) {
                    throw new Exception(json_last_error_msg(), 500);
                }

                $request->replace(get_object_vars($job->callback));
            }

            /*
             * Select task
             */
            switch($job->task_action) {
                /*
                 * Example
                 *
                 * case 'retrieve-customer':
                 *    $response = (new CustomerController())->retrieve($request);
                 *    break;
                 *
                 * case 'create-user:
                 *    $response = (new AuthController())->create($request);
                 *    break;
                 */
                default:
                    throw new Exception('task ' . $job->task . ' unknown', 404);
                    break;
            }
        }
        catch(\Illuminate\Validation\ValidationException $e) {
            throw new Exception();
        }
        catch(Exception $e) {

        }
    }

    public function failed(Exception $exception)
    {
        app()->captureException($exception);
    }
}
