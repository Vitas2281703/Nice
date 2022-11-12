<?php

namespace App\Services\Contracts;

use Illuminate\Http\Client\RequestException;

interface OurClientService
{
    public function getOurClients();
}

