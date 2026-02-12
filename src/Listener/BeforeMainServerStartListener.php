<?php

declare(strict_types=1);
/**
 * 
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Listener;

use Hyperf\Event\Contract\ListenerInterface;
use Hyperf\Framework\Event\BeforeMainServerStart;
use Cryjkd\Nats\ConsumerManager;
use Psr\Container\ContainerInterface;

/**
 * Must handle the event before `Hyperf\Process\Listener\BootProcessListener`.
 */
class BeforeMainServerStartListener implements ListenerInterface
{
    public function __construct(private ContainerInterface $container)
    {
    }

    /**
     * @return string[] returns the events that you want to listen
     */
    public function listen(): array
    {
        return [
            BeforeMainServerStart::class,
        ];
    }

    /**
     * Handle the Event when the event is triggered, all listeners will
     * complete before the event is returned to the EventDispatcher.
     */
    public function process(object $event): void
    {
        // Init the consumer process.
        $consumerManager = $this->container->get(ConsumerManager::class);
        $consumerManager->run();
    }
}
