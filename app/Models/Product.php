<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = 'products';
    protected $fillable = [];

    const CACHE_TAG = 'prodcuts';

}
