<?php
namespace Jlopez\GitConsole\Console\Commands\Git;

use Jlopez\GitConsole\Console\Git\Service\Github;
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
    protected $actions = [
        1 => 'Run PHPCS',
        2 => 'Run PHPMD',
    ];

    const DEFAULT_TYPE_COMMAND = 1;

// 71c2677e1fb17e2da69c34748a32f9b360dc9747
    protected function configure()
    {
        $this
            ->setName("git")
            ->setDescription('Git > verification merge tool')
            ;
    }

    protected function renderHeader(OutputInterface $output)
    {
        $output->writeln('<info>==========================================================</info>');
        $output->writeln('<info>|                                                        |</info>');
        $output->writeln('<info>|           Git console Help                             |</info>');
        $output->writeln('<info>|                                                        |</info>');
        $output->writeln('<info>==========================================================</info>');
    }

    protected function interact(InputInterface $input, OutputInterface $output)
    {

        $this->renderHeader($output);

        $defaultType = self::DEFAULT_TYPE_COMMAND;

        $buildOptions = [];
        foreach ($this->actions as $action => $command) {
            $buildOptions[] =  "<comment>$action</comment>: $command\n";
        }

        $buildOptions[] = "<question>Choose a type:</question> [<comment>$defaultType</comment>] ";


        $type = $this->getHelper('dialog')->askAndValidate($output, $buildOptions, function($typeInput) {

            $test = new Github();
           /* if (!in_array($typeInput, array(1, 2))) {
                throw new \InvalidArgumentException('Invalid type');
            }*/

            return $typeInput;
        }, 10, $defaultType);

        $input->setArgument('type', $type);
    }
    /*
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $style = new OutputFormatterStyle('white', 'green', array('bold'));
        $output->getFormatter()->setStyle('goodluck', $style);
        $output->writeln('<goodluck>I am going to do something very useful</goodluck>');

        $output->writeln("Git console");
    }*/
}