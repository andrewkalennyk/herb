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

    public function subCategories()
    {
        return $this->hasMany(ProductCategory::class, 'parent_id');
    }

    public static function scopeFindCategory($query, $category = null, $subCategory = null)
    {
        return $query->where('slug', $subCategory ? $subCategory : $category);
    }

    public function getUrl()
    {
        $category = !$this->parent ? $this->slug : $this->parent->slug;
        $subCategory = $this->parent ? $this->slug : '';
        return route('category',[$category, $subCategory]);
    }

}
