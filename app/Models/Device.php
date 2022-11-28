<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Device extends Model
{

    protected $with = [
        'fabricator',
        'category',
        'orderService',
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
        'fabricator_id',
        'category_id'
    ];



    public function fabricator(){
        return $this->belongsTo(Fabricator::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function orderService(){
        return $this->hasMany(OrderService::class);
    }

}
