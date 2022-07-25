<?php

namespace App\Domain;


use Quenary\Attributes\EventType;

enum ArticleEventTypes: string implements EventType
{
    case Command = 'huldufolk.command';
    case Query = 'huldufolk.query';
    case Event = 'huldufolk.event';
}