<?php

namespace App\Models;

class NpStreet extends NpBase
{
    protected $table = 'np_streets';

    protected $fillable = [
        'ref',
        'np_city_id',
        'title',
        'title_ua',
        'title_en',
        'is_active'
    ];

    public function scopeCity($query, $areaId)
    {
        return $query->where('np_city_id', $areaId);
    }
}
