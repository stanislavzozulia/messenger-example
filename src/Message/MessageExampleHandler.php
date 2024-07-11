<?php declare(strict_types=1);

namespace App\Message;

use Symfony\Component\Messenger\Attribute\AsMessageHandler;

#[AsMessageHandler]
class MessageExampleHandler
{
    public function __invoke(MessageExample $message)
    {

    }

}
