<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use App\Application\Controller;

$container = require 'container.php';

$container->get(\Quenary\QuenaryImplementation::class)->injectContainer($container);

$controller = $container->get(Controller::class);
$controller->doAction();