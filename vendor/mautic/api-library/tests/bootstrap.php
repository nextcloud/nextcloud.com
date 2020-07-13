<?php
// Ensure a test config exists
$configPath = __DIR__ . '/local.config.php';

if (!file_exists($configPath)) {
    fwrite(STDOUT, "A local config file does not exist.  Please create one.  You can use the file at ".__DIR__."/local.config.php.dist as a starting point.\n");

    exit;
}

// Load the Composer autoloader
$autoloadPath = dirname(__DIR__).'/vendor/autoload.php';

if (!file_exists($autoloadPath)) {
    fwrite(STDOUT, "Composer is not set up properly, please run 'composer install'.\n");

    exit;
}

require $autoloadPath;
