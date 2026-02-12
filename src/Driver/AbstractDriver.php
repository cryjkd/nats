<?php

declare(strict_types=1);
/**
 * 
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Driver;

use Cryjkd\Contract\StdoutLoggerInterface;
use Psr\Container\ContainerInterface;
use Psr\Log\LoggerInterface;

abstract class AbstractDriver implements DriverInterface
{
    protected LoggerInterface $logger;

    public function __construct(protected ContainerInterface $container, protected string $name, protected array $config)
    {
        $this->logger = $container->get(StdoutLoggerInterface::class);
    }
}
