<?php


namespace App\Models;


class Order extends BaseModel
{
    protected $table = 'orders';
    protected $fillable = [
        'first_name',
        'last_name',
        'phone',
        'delivery_type',
        'paid_type'
    ];

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }



}
