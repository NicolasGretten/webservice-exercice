<?php

namespace App\Traits;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Builder;

/**
 * Trait FiltersTrait
 * @package App\Traits
 */
trait FiltersTrait
{
    /**
     * @param Builder $builder
     *
     * @return Builder
     */
    public function filterCompany(Builder $builder)
    {
        return $builder->where('company_id', auth()->user()->company_id);
    }

    /**
     * @param Builder $builder
     *
     * @return Builder
     * @throws Exception
     */
    public function filterStatus(Builder $builder)
    {
        $requestedFilters = request()->get('filters');

        if($requestedFilters === null) {
            return $builder;
        }

        foreach ($requestedFilters as $filterName => $filterValue) {
            switch ($filterName) {
                default:
                    throw new Exception('The filter ' . $filterName . ' is unknown', 404);
                break;

                case 'status':
                    foreach ($filterValue as $value) {
                        if (!in_array($value, ['FAILURE', 'PENDING', 'SUCCESS'], true)) {
                            throw new Exception('The filter value ' . $value . ' is unknown', 404);
                        }
                    }

                    $builder->whereIn('status', $filterValue);
                break;

                case 'created':
                    foreach ($requestedFilters[$filterName] as $optionKey => $optionValue) {
                        switch ($optionKey) {
                            default:
                                throw new Exception('The filter ' . $filterName . ' with the option ' . key($filterValue) . ' is unknown', 404);
                            break;

                            case 'gt': // Greater Than
                                $builder->where('created_at', '>', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'gte': // Greater Than or Equal
                                $builder->where('created_at', '>=', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'lt': // Less Than
                                $builder->where('created_at', '<', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'lte': // Less Than or Equal
                                $builder->where('created_at', '<=', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;
                        }
                    }
                break;

                case 'updated':
                    foreach ($requestedFilters[$filterName] as $optionKey => $optionValue) {
                        switch ($optionKey) {
                            default:
                                throw new Exception('The filter ' . $filterName . ' with the option ' . key($filterValue) . ' is unknown', 404);
                            break;

                            case 'gt': // Greater Than
                                $builder->where('updated_at', '>', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'gte': // Greater Than or Equal
                                $builder->where('updated_at', '>=', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'lt': // Less Than
                                $builder->where('updated_at', '<', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'lte': // Less Than or Equal
                                $builder->where('updated_at', '<=', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;
                        }
                    }
                break;

                case 'deleted':
                    foreach ($requestedFilters[$filterName] as $optionKey => $optionValue) {
                        switch ($optionKey) {
                            default:
                                throw new Exception('The filter ' . $filterName . ' with the option ' . key($filterValue) . ' is unknown', 404);
                            break;

                            case 'gt': // Greater Than
                                $builder->where('deleted_at', '>', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'gte': // Greater Than or Equal
                                $builder->where('deleted_at', '>=', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'lt': // Less Than
                                $builder->where('deleted_at', '<', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;

                            case 'lte': // Less Than or Equal
                                $builder->where('deleted_at', '<=', Carbon::createFromTimestamp($optionValue)->toDateTimeString());
                            break;
                        }
                    }
                break;
            }
        }

        return $builder;
    }
}
