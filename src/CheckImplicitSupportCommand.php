<?php
declare(strict_types=1);

namespace PrinsFrank\ComposerImplicitSupportChecker;

use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class CheckImplicitSupportCommand extends BaseCommand
{
    protected function configure(): void
    {
        $this->setName('check-implicit-support');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Checking implicit support in required packages');
    }
}
