<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;
use Exception;

/**
 * Trait ControlsTrait
 * @package App\Traits
 */
trait ControlsTrait
{
    use JwtTrait;

    /**
     * @param Builder $builder
     *
     * @param array   $controls
     *
     * @return ControlsTrait
     * @throws Exception
     */
    public function control(Builder $builder, array $controls)
    {
        foreach ($controls as $control) {
            if (method_exists($this, $control) === false) {
                throw new Exception('The control ' . $control . ' is unknown', 404);
            }
            $this->{$control}($builder);
        }

        return $this;
    }

    /**
     * @param Builder $builder
     *
     * @return ControlsTrait
     */
    public function whitemark(Builder $builder)
    {
        if(!empty($this->jwt('profile')->get('account')->whitemark_id)) {
            $builder->where('whitemark_id', $this->jwt('profile')->get('account')->whitemark_id);
        }

        if(!empty(app('request')->input('whitemark_id'))) {
            $builder->where('whitemark_id', app('request')->input('whitemark_id'));
        }

        return $this;
    }
}
