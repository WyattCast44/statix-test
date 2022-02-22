<?php

use Statix\Application;

require_once 'vendor/autoload.php';

$app = Application::new();

dd('Base Path:', $app->basePath(), 'CWD:', getcwd());

$app->cli->run();