<?php

namespace App\Models;


use A17\Twill\Models\Model;

class DeviceModel extends Model 
{
    

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
