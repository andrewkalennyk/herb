<?php

namespace App\Models;

class NpBase extends BaseModel
{
    protected $fillable = ['ref', 'title', 'title_ua', 'title_en', 'is_active'];

    public function scopeRef($query, $ref)
    {
        return $query->where('ref', $ref);
    }
}
