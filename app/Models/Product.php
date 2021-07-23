<?php

namespace App\Models;

class Product extends BaseModel
{
    protected $table = 'products';
    protected $fillable = [];

    const CACHE_TAG = 'products';

    public function category()
    {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function product_prices()
    {
        return $this->hasMany(ProductPrice::class, 'product_id')->orderBy('unit_value', 'asc');
    }

    public function product_price()
    {
        return $this->hasOne(ProductPrice::class, 'product_id')->orderBy('unit_value', 'asc');
    }

    public function scopeProductDefaultPrices($query)
    {
        return $query
            ->select('products.*',
                'product_prices.id as product_price_id',
                'product_prices.unit_type',
                'product_prices.unit_value',
                'product_prices.old_price',
                'product_prices.price',
                'product_prices.is_default'
            )->join('product_prices', function ($join) {
            $join->on('product_prices.product_id', '=', 'products.id')
                    ->where('is_default', 1);
            });

    }

    public static function scopeActive($query)
    {
        return $query->where('products.is_active', '1');
    }

    public static function scopeHit($query)
    {
        return $query->where('products.is_hit', '1');
    }

    public static function scopeNew($query)
    {
        return $query->where('products.is_new', '1');
    }

    public static function scopeByCategory($query, $category = null)
    {
        if ($category instanceof ProductCategory) {
            $subCategories = $category->subCategories->pluck('id');
            return $subCategories->count() ?
                $query->whereIn('category_id', $subCategories) :
                $query->where('category_id', $category->id);
        } else {
            return $query;
        }
    }

    public static function scopeSlug($query, $slug)
    {
        return $query->where('slug', $slug);
    }

    public static function scopeOrder($query)
    {
        if (request()->has('title')) {
            $query = $query->orderTitle(request()->input('title'));
        } else {
            $query;
        }

        if (request()->has('price')) {
            $query = $query->orderBy('price', request()->input('price'));
        }

        return $query;
    }

    public function getDefaultPriceAttribute()
    {
        return $this->product_prices->count() ?
            $this->product_prices->where('is_default', 1)->first() :
            '' ;
    }

    public function getDefaultUnitAttribute()
    {
        return $this->default_price ?
            $this->default_price->unit_value . __t($this->default_price->unit_type) . '.' :
            '-';
    }

    public function getDefaultPriceValueAttribute()
    {
        return $this->default_price ?
            $this->default_price->price :
            '-';
    }

    public function getUrl()
    {
        $parentCategorySlug = $this->category->parent->slug;
        $categorySlug = $this->category->slug;
        return route('product', [$parentCategorySlug, $categorySlug, $this->slug]);
    }

    public function scopeOrderTitle($query, $value) {
        $title = app()->getLocale() == 'ru' ? 'title' : 'title_'.app()->getLocale();
        return $query->orderBy($title, $value);
    }

}
