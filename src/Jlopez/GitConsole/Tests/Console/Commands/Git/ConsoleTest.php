<?php
namespace Jlopez\GitConsole\Tests\Console\Commands\Git;

use Symfony\Component\Console\Tester\CommandTester;
use Symfony\Component\Console\Application;
use Jlopez\GitConsole\Console\Commands\Git\Console as GitConsole;

class ConsoleTest extends \PHPUnit_Framework_TestCase
{
	public function testCommandsAreAvailable()
	{
		$app = new Application();
		$app->add(new GitConsole());

		$command = $app->find("git:verify:merge");
		$commandTester = new CommandTester($command);
        $commandTester->execute([]);

		$this->assertRegExp('/Git console/', $commandTester->getDisplay());
	}
}