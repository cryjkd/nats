<?php

declare(strict_types=1);
/**
 * 
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Driver;

use Cryjkd\Nats\Contract\PublishInterface;
use Cryjkd\Nats\Contract\RequestInterface;
use Cryjkd\Nats\Contract\SubscribeInterface;

interface DriverInterface extends PublishInterface, RequestInterface, SubscribeInterface
{
}
