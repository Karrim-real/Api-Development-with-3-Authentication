<?php

namespace App\Interfaces;

interface MailingInterface {

    /**
     * sendGiftCard
     *
     * @param  mixed $recipient
     * @param  mixed $messages
     * @return void
     */
    public function sendGiftCard(string $recipient, array $messages);
}
