<?php

namespace App\Models;

class NpArea extends NpBase
{
    protected $table = 'np_areas';

    public function np_cities()
    {
        return $this->hasMany(NpCity::class);
    }

}
