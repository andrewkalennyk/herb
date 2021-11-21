<?php


namespace App\Models;


class Order extends BaseModel
{
    protected $table = 'orders';
    protected $fillable = [
        'user_id',
        'first_name',
        'last_name',
        'phone',
        'email',
        'delivery_type',
        'paid_type',
        'type',
        'np_region_id',
        'np_city_id',
        'np_warehouse_id',
        'np_street_id',
        'house',
        'total',
        'is_paid',
        'is_checked',
        'paid_at'
    ];

    const DELIVERY_NOVA_POSHTA = 'np';
    const DELIVERY_NOVA_POSHTA_COURIER = 'np_courier';
    const DELIVERY_PICKUP = 'pickup';

    const PAY_ONLINE = 'online';
    const PAY_CASH_ON_DELIVERY = 'cash_on_delivery';

    const TYPE_NEW = 'new';
    const TYPE_DELIVERED = 'delivered';
    const TYPE_CANCELED = 'canceled';

    public static $typePaid = [
        self::DELIVERY_NOVA_POSHTA => 'Новая почта',
        self::DELIVERY_NOVA_POSHTA_COURIER => 'Новая почта (курьер)',
        self::DELIVERY_PICKUP => 'Самовывоз (только по Киеву)',
    ];

    public static $typePay = [
        self::PAY_ONLINE => 'Онлайн оплата',
        self::PAY_CASH_ON_DELIVERY => 'Наложенный платеж'
    ];

    public static $type = [
        self::TYPE_NEW => 'Новый',
        self::TYPE_DELIVERED => 'Доставлен',
        self::TYPE_CANCELED => 'Отменен',
    ];

    public static $typeColor = [
        self::TYPE_NEW => 'blue',
        self::TYPE_DELIVERED => 'green',
        self::TYPE_CANCELED => 'red',
    ];

    public function order_products()
    {
        return $this->hasMany(OrderProduct::class);
    }

    public function scopeUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }



}
