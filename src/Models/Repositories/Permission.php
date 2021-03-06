<?php

namespace Dcat\Admin\Models\Repositories;

use Dcat\Admin\Repositories\EloquentRepository;

class Permission extends EloquentRepository
{
    public function __construct()
    {
        $this->eloquentClass = config('admin.database.permissions_model');

        parent::__construct();
    }
}
