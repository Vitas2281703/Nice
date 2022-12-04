<?php

namespace App\Models;


use A17\Twill\Models\Model;

class Request extends Model
{

    /** @var string[] $fillable */
    protected $fillable = [
        'fio',
        'phone',
        'message',
        'status'
    ];

    public function getFormattedCreatedAtAttribute()
    {
        return $this->created_at->format('d.m.Y H:i');
    }

}
