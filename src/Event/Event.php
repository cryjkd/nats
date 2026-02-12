<?php

declare(strict_types=1);
/**
 *
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Event;

use Cryjkd\Nats\AbstractConsumer;

abstract class Event
{
    public function __construct(protected AbstractConsumer $consumer)
    {
    }

    public function getConsumer(): AbstractConsumer
    {
        return $this->consumer;
    }
}
