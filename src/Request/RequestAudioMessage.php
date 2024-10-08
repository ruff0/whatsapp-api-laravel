<?php

namespace Ruff0\WhatsappApiLaravel\Request;

use Ruff0\WhatsappApiLaravel\Request;

class RequestAudioMessage extends Request
{
    /**
     * Makes the raw body of the request.
     *
     */
    protected function makeBody(): void
    {
        $this->body = [
            'messaging_product' => $this->message->messagingProduct(),
            'recipient_type' => $this->message->recipientType(),
            'to' => $this->message->to(),
            'type' => $this->message->type(),
            'audio' => [
                $this->message->identifierType() => $this->message->identifierValue(),
            ],
        ];
    }
}
