<?php

use Symfony\Component\Console\Application;

$cli = new Application('Doctrine Command Line Interface', \Doctrine\ORM\Version::VERSION);
$cli->setCatchExceptions(true);

// Register all Doctrine commands
$cli->addCommands(ConsoleRunner::createHelperSet($cli)->getCommands());

// Runs console application
$cli->run();
