<?php

declare(strict_types=1);
/**
 *
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Encoders;

/**
 * Interface Encoder.
 */
interface Encoder
{
    /**
     * Encodes a message.
     *
     * @param string $payload message to decode
     */
    public function encode(mixed $payload): string;

    /**
     * Decodes a message.
     *
     * @param string $payload message to decode
     */
    public function decode(string $payload): mixed;
}
