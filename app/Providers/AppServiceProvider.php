<?php

namespace App\Providers;

use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Validator::extend('relations', function($attribute, $value, $parameters) {
            try {
                $relations = json_decode($value);

                $relationsInError = array_diff($relations, $parameters);

                if (!empty($relationsInError)) {
                    return false;
                }
            }
            catch(Exception $e) {
                return false;
            }

            return true;
        });

        Validator::replacer('relations', function($message, $attribute, $rule, $parameters) {
            return 'One of the relations does not exist.';
        });

        \Illuminate\Support\Collection::macro('toArrayRecursive', function () {
            return $this->map(function ($value) {
                if (is_array($value) || is_object($value)) {
                    return collect($value)->toArrayRecursive();
                }
                return $value;
            });
        });
    }
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
