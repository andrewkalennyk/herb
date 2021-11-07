<?php

namespace App\Models;

use Vis\Builder\User as UserBuilder;

class User extends UserBuilder
{
    protected $fillable = ['first_name', 'last_name', 'patronymic_name', 'phone','date_birth'];
}
