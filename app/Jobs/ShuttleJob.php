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

    private array $request;

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
        try {
            $currentJob = json_decode(json_encode($this->request));

            /*
             * Select task
             */
            switch ($currentJob->task) {
                /*
                 * Example
                 *
                case 'validate:customer:login_id':
                    $this->ValidateModelValue(['id' => 'required|string|size:25'], $currentJob);
                break;

                case 'confirm:user:company_id':
                    $this->ConfirmModelValue(new UserValidate(), 'user_id', 'company_id', $currentJob);
                break;
                */

                default:
                    throw new Exception('task ' . $currentJob->task . ' unknown', 404);
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
