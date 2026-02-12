<?php

declare(strict_types=1);
/**
 *
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */
namespace Cryjkd\Nats;

use Cryjkd\Nats\Driver\DriverFactory;
use Cryjkd\Nats\Driver\DriverInterface;
use Cryjkd\Nats\Listener\BeforeMainServerStartListener;
use Psr\Container\ContainerInterface;

class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [
                DriverInterface::class => function (ContainerInterface $container) {
                    $factory = $container->get(DriverFactory::class);
                    return $factory->get('default');
                },
            ],
            'listeners' => [
                BeforeMainServerStartListener::class => 99,
            ],
            'publish' => [
                [
                    'id' => 'config',
                    'description' => 'The config for nats.',
                    'source' => __DIR__ . '/../publish/nats.php',
                    'destination' => BASE_PATH . '/config/autoload/nats.php',
                ],
            ],
        ];
    }
}