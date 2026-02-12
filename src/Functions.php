<?php

declare(strict_types=1);
/**
 * 
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats;

function stream_set_timeout($fp, $seconds, $microseconds)
{
    return \stream_set_timeout($fp, (int) $seconds, (int) $microseconds);
}
