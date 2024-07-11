<?php declare(strict_types=1);

namespace App\Command;

use App\Message\MessageExample;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Messenger\MessageBusInterface;

#[AsCommand(name: 'app:enqueue', description: 'Enqueue some job')]
class EnqueueCommand extends Command
{
    public function __construct(
        public readonly MessageBusInterface $messageBus
    )
    {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->messageBus->dispatch(new MessageExample(1));

        return 0;
    }
}
