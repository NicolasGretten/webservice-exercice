<?php

namespace App\Subscribers;

use Amranidev\MicroBus\Sns\Facades\Publisher;
use Amranidev\MicroBus\Sqs\Traits\JobHandler;
use Exception;
use Illuminate\Database\Eloquent\JsonEncodingException;
use Illuminate\Queue\Jobs\Job;

class CheckFieldSubscriber
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
     * @return void
     */
    public function handle()
    {
        try {
            $this->payload = json_decode($this->payload);

            if(json_last_error() !== JSON_ERROR_NONE) {
                throw new JsonEncodingException(json_last_error_msg(), 500);
            }

            if ($this->payload->receiver == env('APP_NAME')) {
                /*
                switch($this->payload->query->column) {
                    case 'id':
                        Publisher::publish('confirm_field', json_encode([
                            'sender' => env('APP_NAME'),
                            'receiver' => $this->payload->sender,
                            'query' => [
                                'id' => $this->payload->query->id,
                                'column' => 'cdn_id',
                                'value' => $this->payload->query->value
                            ],
                            'response' => [
                                'status' => 'FAILURE',
                                'message' => 'Not found.'
                            ]
                        ]));
                    break;
                */
                }
            }
        }
        catch(JsonEncodingException | Exception $e) {
            report($e);
        }
    }
}
