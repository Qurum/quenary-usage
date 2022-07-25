<?php

declare(strict_types=1);

namespace App\Application;

use App\Domain\ArticleEventTypes;
use App\Domain\Commands\PublishAnArticleCommand;
use Quenary\Quenary;

class Controller
{
    public function __construct(private readonly Quenary $dispatcher) {}

    public function doAction(): void
    {
        $this->dispatcher::dispatch(
            ArticleEventTypes::Command->value,
            json_encode(
                new PublishAnArticleCommand(
                    'Хульдуфоулк',
                    'Наступает рождество. Пора менять дома.',
                    'anonymous'
                )
            )
        );
    }
}