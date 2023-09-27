<?php

namespace App\Interfaces;

interface MailingInterface {

    public function sendGiftCard(string $recipient, array $messages);
}
