<?php
namespace Jlopez\GitConsole\Console\Commands\Git;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class Console extends Command
{
    protected function configure()
    {
        $this
            ->setName("git:verify:merge")
            ->setDescription('Git > verification merge tool')
            ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln("Git console");
    }
}