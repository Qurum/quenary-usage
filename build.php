<?php

declare(strict_types=1);

use Quenary\QuenaryAutoloader;

require 'vendor/autoload.php';

$container = require "src/container.php";
$container->get(QuenaryAutoloader::class)->autoloader()->dump();
