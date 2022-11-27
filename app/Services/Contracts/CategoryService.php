<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface CategoryService
{
    /**
     * @return array<int, array{label: string, value: integer}>
     */
    public function getCategories(): array;

    public function getAllCategories();

}

