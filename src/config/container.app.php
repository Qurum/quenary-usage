<?php

use App\Domain\Services\ArticleService;
use App\Domain\Services\LoggerService;
use App\Domain\Services\NotifierService;
use App\Infrastructure\Services\ArticleServiceImplementation;
use App\Infrastructure\Services\LoggerServiceImplementation;
use App\Infrastructure\Services\NotifierServiceImplementation;
use Monolog\Handler\StreamHandler as MonologStreamHandler;
use Monolog\Logger;
use Quenary\Quenary;
use Quenary\QuenaryAutoloader;
use Quenary\QuenaryImplementation;

return [
    /**
     * Monolog setup
     */
    Logger::class            => DI\autowire(Logger::class)
        ->constructorParameter('name', DI\env('LOG_CHANNEL'))
        ->method(
            'pushHandler',
            DI\autowire(MonologStreamHandler::class)
                ->constructor('php://stdout', Logger::INFO)
        ),

    /**
     * Dispatcher
     */
    Quenary::class           => DI\autowire(QuenaryImplementation::class),
    QuenaryAutoloader::class => DI\autowire(QuenaryImplementation::class),

    /**
     * App
     */
    ArticleService::class    => DI\autowire(ArticleServiceImplementation::class),
    LoggerService::class     => DI\autowire(LoggerServiceImplementation::class),
    NotifierService::class   => DI\autowire(NotifierServiceImplementation::class),

];