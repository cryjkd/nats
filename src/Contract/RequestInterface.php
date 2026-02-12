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
use Cryjkd\Nats\Message;

interface RequestInterface
{
    public function request(string $subject, $payload, Closure $callback): void;

    public function requestSync(string $subject, $payload): Message;
}
