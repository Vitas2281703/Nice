<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;

class OrderService extends Model
{
    use HasRelated;

    protected $fillable = [
        'published',
        'title',
        'description',
        'device_id',
        'promotion_id',
        'price',
        'old_price'
    ];

    public function device(){
        return $this->belongsTo(Device::class);
    }
    public function service(){
        return $this->belongsTo(Service::class);
    }
    public function promotion(){
        return $this->belongsTo(Promotion::class);
    }

}
