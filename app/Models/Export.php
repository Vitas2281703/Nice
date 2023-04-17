<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Export extends Model 
{
    

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
