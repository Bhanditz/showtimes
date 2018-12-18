<?php
declare(strict_types=1);

namespace App\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Generates movie showtimes
 *
 * @author Michael Meyer <mmeyer@datto.com>
 */
class GenerateCommand extends Command
{
    protected static $defaultName = 'showtimes:generate';

    protected function configure()
    {
        $this->addArgument('input-file', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello world!');
    }
}
