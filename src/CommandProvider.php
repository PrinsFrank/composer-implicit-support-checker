<?php
declare(strict_types=1);

namespace PrinsFrank\ComposerImplicitSupportChecker;

use Composer\Command\BaseCommand;

class CommandProvider implements \Composer\Plugin\Capability\CommandProvider
{
    /**
     * @return BaseCommand[]
     */
    public function getCommands(): array
    {
        return [
            new CheckImplicitSupportCommand()
        ];
    }
}
