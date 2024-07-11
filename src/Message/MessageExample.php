<?php declare(strict_types=1);

namespace App\Message;

class MessageExample
{
    public function __construct(
        public readonly int $messageId,
    )
    {
    }
}
