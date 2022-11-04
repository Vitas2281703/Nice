<?php

namespace App\Models;


use A17\Twill\Models\Model;

class OrderService extends Model
{


    protected $fillable = [
        'published',
        'title',
        'description',
        'service_id',
        'device_id',
        'promotion_id',
        'price'
    ];

}
