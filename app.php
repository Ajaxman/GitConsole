#!/usr/bin/env php
<?php
require __DIR__ . '/vendor/autoload.php';

use Jlopez\GitConsole\Console\Commands\Git\Console as GitConsole;
use Symfony\Component\Console\Application;

$app = new Application();
$app->add(new GitConsole);
$app->run();