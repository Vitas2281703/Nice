<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Request extends Model
{

    /** @var string[] $fillable */
    protected $fillable = [
        'fio',
        'email',
        'message'
    ];

}
