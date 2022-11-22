<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface NewsService
{
    public function getAllNews();

    public function showNews($slug);
}

