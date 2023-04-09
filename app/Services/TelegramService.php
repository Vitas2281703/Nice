<?php

namespace App\Services;

class TelegramService implements Contracts\TelegramService
{
    /** @inheritDoc */

    public function sendMessage(string $message) {
        $message = urlencode($message);

        try {
            file_get_contents('https://api.telegram.org/bot'
                . config('app.tg_bot_token')
                . '/sendMessage?chat_id='
                . config('app.tg_channel_id')
                . '&text='
                . $message
            );
        }
        catch (\Exception $e){

        }
    }
}
