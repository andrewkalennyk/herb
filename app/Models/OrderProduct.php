<?php


namespace App\Models;


class OrderProduct extends BaseModel
{
    protected $table = 'order_products';
    protected $fillable = [
        'product_id',
        'order_id',
        'price',
        'weight',
        'unit_type',
        'qty'
    ];



}
