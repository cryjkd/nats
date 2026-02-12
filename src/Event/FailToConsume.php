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
use Throwable;

class FailToConsume extends Consume
{
    public function __construct(AbstractConsumer $consumer, $data, protected Throwable $throwable)
    {
        parent::__construct($consumer, $data);
    }

    public function getThrowable(): Throwable
    {
        return $this->throwable;
    }
}
