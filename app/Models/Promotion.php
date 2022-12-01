<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Model;
use App\Repositories\PromotionRepository;

class Promotion extends Model
{
    use HasSlug, HasMedias;

    protected $with = [
        'slugs',
    ];

    protected $fillable = [
        'published',
        'title',
        'description',
        'discount',
        'seo_title',
        'seo_description',
        'slug'
    ];

    public $slugAttributes = [
        'title',
    ];

    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => 'default',
                    'ratio' => 1,
                ],
            ],
        ],
    ];
}
