<?php

declare(strict_types=1);
/**
 *
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Contract;

use Closure;

interface SubscribeInterface
{
    public function subscribe(string $subject, string $queue, Closure $callback): void;
}
