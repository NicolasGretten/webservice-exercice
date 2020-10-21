<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use stdClass;

trait ShuttleConfirmationTrait
{
    public function ConfirmModelValue(Model $model, string $object, string $column) {
        try {
            $customerValidation = $model::where($object, $this->job->params->{$object})->where('column', $column)->first();

            if($customerValidation === null) {
                throw new ModelNotFoundException($model->getMorphClass() . ' ' . $this->job->params->{$object} . ' does not exist', 404);
            }

            $customerValidation->status  = $this->job->success == true ? 'SUCCESS' : 'FAILURE';
            $customerValidation->message = $this->job->message;
            $customerValidation->save();
        }
        catch(ModelNotFoundException $e) {
            report($e);
        }
    }
}
