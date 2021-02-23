<?php

namespace App\Traits;

use Carbon\Carbon;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\JsonEncodingException;

/**
 * Trait FiltersTrait
 * @package App\Traits
 */
trait FiltersTrait
{
    use JwtTrait;

    /**
     * @param Builder $builder
     *
     * @param array   $filters
     *
     * @return FiltersTrait
     * @throws Exception
     */
    public function filter(Builder $builder, Array $filters) {
        foreach($filters as $filter) {
            if(method_exists($this, $filter) === false) {
                throw new Exception('The filter ' . $filter . ' is unknown.', 404);
            }
            $this->{$filter}($builder);
        }

        return $this;
    }

    /**
     * @param Builder $builder
     *
     * @return FiltersTrait
     * @throws Exception
     */
    public function date(Builder $builder)
    {
        $requestedFilters = request()->get('filters');

        if($requestedFilters === null) {
            return $this;
        }

        foreach ($requestedFilters as $filterName => $filterValue) {
            switch ($filterName) {
                case 'created':
                    foreach ($requestedFilters[$filterName] as $optionKey => $optionValue) {
                        switch ($optionKey) {
                            default:
                                throw new Exception('The filter ' . $filterName . ' with the option ' . key($filterValue) . ' is unknown.', 404);
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

                            case 'order': // Order by
                                $builder->orderBy('created_at', ($optionValue == 'ASC') ? 'ASC' : 'DESC');
                            break;
                        }
                    }
                break;

                case 'updated':
                    foreach ($requestedFilters[$filterName] as $optionKey => $optionValue) {
                        switch ($optionKey) {
                            default:
                                throw new Exception('The filter ' . $filterName . ' with the option ' . key($filterValue) . ' is unknown.', 404);
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

                            case 'order': // Order by
                                $builder->orderBy('updated_at', ($optionValue == 'ASC') ? 'ASC' : 'DESC');
                            break;
                        }
                    }
                break;

                case 'deleted':
                    foreach ($requestedFilters[$filterName] as $optionKey => $optionValue) {
                        switch ($optionKey) {
                            default:
                                throw new Exception('The filter ' . $filterName . ' with the option ' . key($filterValue) . ' is unknown.', 404);
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

                            case 'order': // Order by
                                $builder->orderBy('deleted_at', ($optionValue == 'ASC') ? 'ASC' : 'DESC');
                            break;
                        }
                    }
                break;
            }
        }

        return $this;
    }

    /**
     * @param Builder $builder
     *
     * @return FiltersTrait
     * @throws Exception
     */
    public function status(Builder $builder)
    {
        $requestedFilters = request()->get('filters');

        if($requestedFilters === null) {
            return $this;
        }

        foreach ($requestedFilters as $filterName => $filterValue) {
            if($filterName === 'status') {
                if (!in_array($filterValue, ['FAILURE', 'PENDING', 'SUCCESS'], true)) {
                    throw new Exception('The filter value ' . $filterValue . ' is unknown.', 404);
                }

                $builder->where('status', $filterValue);
            }
        }

        return $this;
    }

    /**
     * @param Builder $builder
     *
     * @return FiltersTrait
     */
    public function itemsId(Builder $builder)
    {
        if(!empty(request()->get('items_id')))
        {
            $items = json_decode(request()->get('items_id'));

            if(json_last_error()) {
                throw new JsonEncodingException();
            }

            $builder->WhereIn('id', $items)->get();
        }

        return $this;
    }

    public function relations(Builder $builder) {
        if(!empty(app('request')->input('relations'))) {
            $relations = json_decode(app('request')->input('relations'));

            foreach($relations as $relation)
            {
                $builder = $builder->with($relation);
            }

            return $this;
        }
        else {
            return $this;
        }
    }
}
