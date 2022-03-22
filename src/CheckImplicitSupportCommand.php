<?php
declare(strict_types=1);

namespace PrinsFrank\ComposerImplicitSupportChecker;

use Composer\Command\BaseCommand;
use Composer\Semver\Constraint\Constraint;
use Composer\Semver\VersionParser;
use RuntimeException;
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
        $composer = $this->getComposer();
        if ($composer === null) {
            throw new RuntimeException('Could not retrieve composer');
        }

        $lockData = $composer->getLocker()?->getLockData();
        $requiredPackages = array_merge($lockData['packages'], $lockData['packages-dev']);
        $warnings = $errors = 0;
        $versionParser = new VersionParser();
        foreach ($requiredPackages as $package) {
            $packageName = $package['name'] ?? '';
            $phpVersionConstraint = $package['require']['php'] ?? null;
            if ($phpVersionConstraint === null) {
                $this->getIO()->warning('Package "' . $packageName . '" has no PHP version defined');
                $warnings++;
            } elseif ($versionParser->parseConstraints($phpVersionConstraint)->matches(new Constraint('==', $versionParser->normalize(PHP_VERSION))) === false) {
                $this->getIO()->error('Package "' . $packageName . '" requires an incompatible PHP version (' . $phpVersionConstraint . ')');
                $errors++;
            } elseif(str_contains($phpVersionConstraint, PHP_MAJOR_VERSION . '.' . PHP_MINOR_VERSION)) {
                $this->getIO()->info('Package "' .  $packageName . '" explicitly supports the current PHP version (' . $phpVersionConstraint . ')');
            } elseif(str_contains($phpVersionConstraint, PHP_MAJOR_VERSION . '.0')) {
                $this->getIO()->warning('Package "' . $packageName . '" implicitly supports the current PHP Major version (' . $phpVersionConstraint . ')');
                $warnings++;
            } else {
                $this->getIO()->warning('Package "' . $packageName . '" implicitly supports the current PHP version (' . $phpVersionConstraint . ')');
                $warnings++;
            }
        }

        $output->writeln(count($requiredPackages) . ' required packages checked wih ' . $warnings . ' warnings and ' . $errors . ' errors');
    }
}
