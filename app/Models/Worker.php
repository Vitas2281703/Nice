<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Model;

class Worker extends Model 
{
    use HasFiles;

    protected $fillable = [
        'published',
        'title',
        'description',
    ];
    
}
