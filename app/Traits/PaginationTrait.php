<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Builder;

trait PaginationTrait
{
    /**
     * @var mixed $pagination
     *
     * @return $this
     */
    public $pagination = false;

    public function paginate(Builder $builder)
    {
        $limit = request()->get('limit');

        if(!empty($limit) and (int) $limit > 0) {
            $pagination = $builder->paginate($limit);

            $this->pagination = json_encode([
                'current_page'  => (int) $pagination->currentPage(),
                'last_page'     => (int) $pagination->lastPage(),
                'per_page'      => (int) $pagination->perPage(),
                'total'         => (int) $pagination->total(),
                'next_page_url' => $pagination->nextPageUrl(),
                'prev_page_url' => $pagination->previousPageUrl()
            ]);
        }

        return $this;
    }
}
