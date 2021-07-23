<?php

namespace App\Models;

class ProductPrice extends BaseModel
{
    protected $table = 'product_prices';
    protected $fillable = [];

    const CACHE_TAG = 'product_prices';

    public function product()
    {
        $this->belongsTo(Product::class);
    }

    public function unitVal() {
        return $this->unit_value . ' ' . __t($this->unit_type);
    }

}
