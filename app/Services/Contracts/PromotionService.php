<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface PromotionService
{
    /**
     * @return array<int, array{label: string, value: integer}>
     */
    public function getPromotions(): array;

    public function getPromo();

    public function showPromo($slug);
}

