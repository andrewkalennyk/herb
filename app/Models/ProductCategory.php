<?php

namespace App\Models;

class ProductCategory extends BaseModel
{
    protected $table = 'product_categories';
    protected $fillable = [];

    const CACHE_TAG = 'product_categories';

    public function parent()
    {
        return $this->belongsTo(ProductCategory::class, 'parent_id');
    }

}
