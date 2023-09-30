<?php

namespace App\Services;

use App\Interfaces\MailingInterface;
use App\Mail\CardNotification;
use Illuminate\Support\Facades\Mail;

class MailingService implements MailingInterface
{
    /**
     * sendGiftCard
     *
     * @param  mixed $recipient
     * @param  mixed $messages
     * @return void
     */
    public function sendGiftCard(string $recipient, array $messages)
    {
        return Mail::to($recipient)
        ->bcc('karrim4real@gmail.com')->cc('akinyemi4taiwo@gmail.com')
        ->queue(new CardNotification(($messages)));
    }
}
