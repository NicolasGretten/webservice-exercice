<?php

namespace App\Jobs;

use App\Traits\BroadcastVerificationTrait;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;

class BroadcastJob extends Job implements ShouldQueue
{
    use BroadcastVerificationTrait;

    private array $request;

    /**
     * The number of times the job may be attempted.
     *
     * @var int
     */
    public int $tries = 100;

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
        try {
            $job = json_decode(json_encode($this->request));

            /*
             * Select task
             */
            switch ($job->task) {
                /*
                 * Example
                 *
                case 'check:customer:login_id':
                    $this->CheckModelValue(new User, 'id', $job);
                break;

                case 'update:user:company_id':
                    $this->UpdateValidationModel(new UserValidate, 'user_id', 'company_id', $job);
                break;
                */

                default:
                    throw new Exception('task ' . $job->task . ' unknown', 404);
                break;
            }
        } catch (Exception $e) {
            report($e);
        }
    }

    public function failed($e)
    {
        report($e);
    }
}
