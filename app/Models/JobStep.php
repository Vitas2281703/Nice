<?php

namespace App\Models;


use A17\Twill\Models\Model;

class JobStep extends Model 
{
    

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
