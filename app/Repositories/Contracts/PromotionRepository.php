<?php

namespace App\Repositories\Contracts;

use Illuminate\Http\Client\RequestException;

interface PromotionRepository
{
    public function getOnePromo($slug);
}

