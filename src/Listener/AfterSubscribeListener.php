<?php

declare(strict_types=1);
/**
 *
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Listener;

use Hyperf\Contract\StdoutLoggerInterface;
use Hyperf\Event\Contract\ListenerInterface;
use Cryjkd\Nats\Event\AfterSubscribe;

class AfterSubscribeListener implements ListenerInterface
{
    public function __construct(protected StdoutLoggerInterface $logger)
    {
    }

    public function listen(): array
    {
        return [
            AfterSubscribe::class,
        ];
    }

    /**
     * @param AfterSubscribe $event
     */
    public function process(object $event): void
    {
        $this->logger->warning(sprintf(
            'NatsConsumer[%s] subscribe timeout. Try again after 1 ms.',
            $event->getConsumer()->getName()
        ));
    }
}
