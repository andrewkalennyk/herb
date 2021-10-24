<?php

namespace App\Models;

class NpWareHouse extends NpBase
{
    protected $table = 'np_warehouses';

    protected $fillable = [
        'ref',
        'np_city_id',
        'np_warehouse_type_id',
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
