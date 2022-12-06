<?php

namespace App\Models;


use A17\Twill\Models\Behaviors\HasRelated;
use A17\Twill\Models\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasRelated;

    protected $with = [
        'orderPoints'
    ];

    protected $fillable = [
        'published',
        'description',
        'user_id',
        'bonuses',
        'status'
    ];

    public function orderPoints(): HasMany
    {
        return $this->hasMany(OrderPoint::class);
    }

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d.m.Y H:i');
    }

    public function getFormattedTitleAttribute()
    {
        return 'Заказ №'.$this->id;
    }

}
