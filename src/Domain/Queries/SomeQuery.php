<?php

declare(strict_types=1);

namespace App\Domain\Queries;

class SomeQuery
{
    public function __construct(
        public readonly string $payload
    ){}
}