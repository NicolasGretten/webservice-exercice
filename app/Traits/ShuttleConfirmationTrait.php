<?php

namespace App\Traits;

use App\Events\ShuttleJobEvent;
use App\Http\Controllers\AuthController;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use stdClass;

trait ShuttleConfirmationTrait
{
    public function ConfirmModelValue(Model $model, string $object, string $column, stdClass $job) {
        try {
            $customerValidation = $model::where($object, $job->params->{$object})->where('column', $column)->first();

            if($customerValidation === null) {
                throw new ModelNotFoundException($model->getMorphClass() . ' ' . $job->params->{$object} . ' does not exist', 404);
            }

            $customerValidation->status  = $job->success == true ? 'SUCCESS' : 'FAILURE';
            $customerValidation->message = $job->message;
            $customerValidation->save();
        }
        catch(ModelNotFoundException $e) {
            report($e);
        }
    }

    public function ValidateModelValue(array $fieldsToValidate, StdClass $job) {
        $callbackJob = new stdClass();

        if (json_last_error()) {
            throw new Exception(json_last_error_msg(), 500);
        }

        /*
         * Set job to response queue if it defined
         */
        if (!empty($job->callback_queue)) {
            $callbackJob->queue = $job->callback_queue;
        }

        /*
         * Set callback params to job if it defined
         */
        if (!empty($job->callback_params)) {
            $callbackJob->params = $job->callback_params;
        }

        /*
         * Validate the params sent
         */
        $validator = Validator::make(get_object_vars($job->params), $fieldsToValidate);

        if ($validator->fails()) {
            throw new Exception($validator->messages(), 409);
        }

        /*
         * Create new Request object
         */
        $request = new Request();
        $request->id = $job->params->id;

        /*
         * Check login_id from AuthController
         */
        $auth = (new AuthController())->retrieve($request);

        $callbackJob->success = ($auth->getStatusCode() === 200);

        /*
         * Set message to created job if statusCode <> 200
         */
        if ($auth->getStatusCode() !== 200) {
            $callbackJob->message = $auth->getOriginalContent();
        };

        /*
         * Set task name to created job
         */
        $callbackJob->task = 'confirm:customer:login_id';

        /*
         * Create new event with created job
         */
        event(new ShuttleJobEvent($callbackJob));
    }
}
