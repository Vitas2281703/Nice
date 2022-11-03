<?php

namespace App\Models;


use A17\Twill\Models\Model;

class OrderPoint extends Model 
{
    

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
