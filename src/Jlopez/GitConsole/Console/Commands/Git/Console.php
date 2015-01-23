<?php
namespace Jlopez\GitConsole\Console\Commands\Git;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Formatter\OutputFormatterStyle;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class Console
 * @package Jlopez\GitConsole\Console\Commands\Git
 */
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
        $style = new OutputFormatterStyle('white', 'green', array('bold'));
        $output->getFormatter()->setStyle('goodluck', $style);
        $output->writeln('<goodluck>I am going to do something very useful</goodluck>');

        $output->writeln("Git console");
    }
}