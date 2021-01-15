<?php

namespace App\Subscribers;

use Amranidev\MicroBus\Sqs\Traits\JobHandler;
use Exception;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Queue\Jobs\Job;
use Illuminate\Support\Facades\DB;

class ConfirmFieldSubscriber
{
    use JobHandler;

    /**
     * @var mixed
     */
    public $payload;

    /**
     * @var Job
     */
    public Job $job;

    /**
     * Execute the job.
     *
     * @return bool
     */
    public function handle()
    {
        try {
            $this->payload = json_decode($this->payload);

            if (json_last_error() !== JSON_ERROR_NONE) {
                throw new JsonEncodingException(json_last_error_msg(), 500);
            }

            if ($this->payload->receiver == env('APP_NAME')) {
                switch($this->payload->query->column) {
                    case 'whitelabel_id':
                        /*
                        AccountValidate::where('account_id', $this->payload->query->id)->where('column', 'whitelabel_id')->where('status', 'PENDING')->update([
                            'status' => strtoupper($this->payload->response->status),
                            'message' => $this->payload->response->message
                        ]);
                        */
                    break;
                }
            }

            return true;

        }
        catch (ModelNotFoundException | JsonEncodingException | Exception $e) {
            report($e);
        }
    }
}
