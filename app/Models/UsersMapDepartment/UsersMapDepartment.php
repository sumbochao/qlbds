<?php

namespace App\Models\UsersMapDepartment;

use App\Models\BaseModel;

class UsersMapDepartment extends BaseModel
{
   
    protected $table = 'users_map_department';

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
