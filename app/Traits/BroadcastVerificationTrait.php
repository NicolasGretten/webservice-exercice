<?php

namespace App\Traits;

use App\Events\BroadcastJobEvent;
use Exception;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;

trait BroadcastVerificationTrait
{
    public function UpdateValidationModel(Model $model, string $object, string $column, stdClass $job) {
        try {
            $resultSet = DB::table($model->getTable())->where($object, $job->params->{$object})->where('column', $column)->first();

            if($resultSet === null) {
                throw new ModelNotFoundException($model->getMorphClass() . ' ' . $job->params->{$object} . ' does not exist', 404);
            }

            DB::table($model->getTable())->where($object, $job->params->{$object})->where('column', $column)->update([
                'status' => $job->success == true ? 'SUCCESS' : 'FAILURE',
                'message' => $job->message
            ]);
        }
        catch(ModelNotFoundException $e) {
            report($e);
        }
    }

    public function CheckModelValue(Model $model, string $column, StdClass $job) {
        try {
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
             * Create new Request object
             */
            $request = new Request();
            $request->id = $job->params->id;

            /*
             * Check param into the column on model
             */
            $resultSet = $model::where($column, $job->params->id)->first();

            /*
             * Put the job back in the queue as long as the information to be checked is in the SUCCESS state
             */
            if(empty($resultSet)) {
                /*
                 * Set message and status to created job
                 */
                $callbackJob->success = false;
                $callbackJob->message = 'Not found';

                /*
                 * Set task name to created job
                 */
                $action = explode(':', $job->task, 2);

                $callbackJob->task = 'update:' . $action[1];

                /*
                 * Create new event with created job
                 */
                event(new BroadcastJobEvent($callbackJob));
            }
            elseif($resultSet->status == 'PENDING') {
                exit;
            }
            else {
                /*
                 * Set message and status to created job
                 */
                $callbackJob->success = (!empty($resultSet->status) ? $resultSet->status == 'SUCCESS' : true);
                $callbackJob->message = empty($resultSet->message) ? null : $resultSet->message;

                /*
                 * Set task name to created job
                 */
                $action = explode(':', $job->task, 2);

                $callbackJob->task = 'update:' . $action[1];

                /*
                 * Create new event with created job
                 */
                event(new BroadcastJobEvent($callbackJob));
            }
        }
        catch(Exception $e) {
            report($e);
        }
    }
}
