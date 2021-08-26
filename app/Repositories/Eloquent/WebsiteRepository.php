<?php

namespace App\Repositories\Eloquent;

use App\Models\Website;
use App\Repositories\Contracts\WebsiteRepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

class WebsiteRepository extends BaseRepository implements WebsiteRepositoryInterface
{
    public function __construct(Website $model)
    {
        parent::__construct($model);
    }

    public function all(): Collection
    {
        return $this->model->all();
    }

    public function findUserById($id): ?Model
    {
        return $this->model->whereUserId($id)->first();
    }
}
