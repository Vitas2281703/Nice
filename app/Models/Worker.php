<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;

class Worker extends Model
{
    use HasMedias;

    protected $fillable = [
        'published',
        'name',
        'post',
        'education'
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 32 / 25,
                ],
            ],
        ],
    ];

}
