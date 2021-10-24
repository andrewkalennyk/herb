<?php

namespace App\Models;

class NpCity extends NpBase
{
    protected $table = 'np_cities';
    protected $fillable = [
        'ref',
        'np_area_id',
        'title',
        'title_ua',
        'title_en',
        'is_active'
    ];

    public function scopeArea($query, $areaId)
    {
        return $query->where('np_area_id', $areaId);
    }

    public function np_area()
    {
        return $this->belongsTo(NpArea::class);
    }

    public function np_streets()
    {
        return $this->hasMany(NpStreet::class);
    }
}
