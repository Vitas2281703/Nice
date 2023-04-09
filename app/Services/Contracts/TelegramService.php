<?php

namespace App\Services\Contracts;

use App\Models\User;
use Illuminate\Http\Client\RequestException;

interface TelegramService
{
    /**
     * @param string $message
     * @return mixed|void
     */
    public function sendMessage(string $message);
}

