<?php

echo 'Vendor exists: ' . is_dir('vendor') . PHP_EOL;
echo 'Autoload exists: ' . (int) file_exists('vendor/autoload.php') . PHP_EOL;
var_dump(scandir(__DIR__ . '/vendor'));
die();

use Statix\Application;

require_once 'vendor/autoload.php';

$app = Application::new();

dd('Base Path:', $app->basePath(), 'CWD:', getcwd());

$app->cli->run();