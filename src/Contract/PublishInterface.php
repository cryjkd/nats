<?php

declare(strict_types=1);
/**
 *
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Contract;

interface PublishInterface
{
    public function publish(string $subject, $payload = null, $inbox = null): void;
}
