<?php

namespace App\Models\UsersMapDepartment;

use App\Models\BaseModel;

class UsersMapDepartment extends BaseModel
{
   
    protected $table = 'users_map_department';
    protected $fillable = ['user_id', 'department_id'];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
    }
}
