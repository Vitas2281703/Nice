<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Device extends Model
{


    protected $fillable = [
        'published',
        'title',
        'description',
        'fabricator_id',
        'category_id'
    ];


}
