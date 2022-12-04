<?php

namespace App\Models;


use A17\Twill\Models\Model;

class OrderPoint extends Model
{
    protected $with = [
      'orderService'
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
        'order_service_id',
        'order_id',
        'amount'
    ];

    public function orderService() {
        return $this->belongsTo(OrderService::class);
    }
}
