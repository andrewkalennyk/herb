<?php

namespace App\Models;

use Vis\Builder\User as UserBuilder;

class User extends UserBuilder
{
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'patronymic_name',
        'phone',
        'date_birth',
        'fb_id',
    ];
}
