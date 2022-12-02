<?php

namespace App\Models;


use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{

    protected $with = [
        'orderPoints'
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
        'user_id',
    ];

    public function orderPoints(): HasMany
    {
        return $this->hasMany(OrderPoint::class);
    }
}
