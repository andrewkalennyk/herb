<?php

namespace App\Models;

class Promocode extends BaseModel
{
    protected $table = 'promocodes';
    protected $fillable = [
        'user_id',
        'code',
        'is_used',
        'discount',
        'email_used'
    ];

    public function scopeCode($query, $code)
    {
        return $query->where('code', $code);
    }

    public function scopeUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public static function checkUnique($code)
    {
        return (bool)Promocode::code($code)->first();
    }
}
