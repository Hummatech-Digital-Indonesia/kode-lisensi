<?php

namespace App\Contracts\Repositories;

use App\Contracts\Interfaces\ShareProductResellerInterface;
use App\Models\ShareProductReseller;
use App\Models\User;

class ShareProductResellerRepository extends BaseRepository implements ShareProductResellerInterface
{
    public function __construct(ShareProductReseller $shareProductReseller)
    {
        $this->model = $shareProductReseller;
    }

    /**
     * store
     *
     * @param  mixed $data
     * @return mixed
     */
    public function store(array $data): mixed
    {
        return $this->model->query()
            ->create($data);
    }

    /**
     * show
     *
     * @param  mixed $id
     * @return mixed
     */
    public function show(mixed $id): mixed
    {
        return $this->model->query()
            ->where('product_id', $id)
            ->where('user_id', auth()->user()->id)
            ->first();
    }
}