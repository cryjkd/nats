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

abstract class Consume extends Event
{
    public function __construct(AbstractConsumer $consumer, protected mixed $data)
    {
        parent::__construct($consumer);
    }

    public function getData(): mixed
    {
        return $this->data;
    }
}
