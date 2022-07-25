<?php

declare(strict_types=1);

namespace App\Domain\Events;

class NewArticleEvent
{
    public function __construct(
        public readonly string $title
    ) {}
}