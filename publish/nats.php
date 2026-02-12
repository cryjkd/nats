<?php

declare(strict_types=1);
/**
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */


return [
    'default' => [
        'driver' => \Cryjkd\Nats\Driver\NatsDriver::class,
        'encoder' => \Cryjkd\Nats\Encoders\JSONEncoder::class,
        'timeout' => 10.0,
        'options' => [
            'host' => '127.0.0.1',
            'port' => 4222,
            'user' => 'nats',
            'pass' => 'nats',
            'lang' => 'php',
        ],
        'pool' => [
            'min_connections' => 1,
            'max_connections' => 10,
            'connect_timeout' => 10.0,
            'wait_timeout' => 3.0,
            'heartbeat' => -1,
            'max_idle_time' => 60,
        ],
    ],
];
