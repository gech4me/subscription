<?php

namespace App\Repositories\Contracts;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

interface PostRepositoryInterface
{
    public function all(): Collection;

    public function find($id): ?Model;

    public function findUserById($id): ?Model;
}
