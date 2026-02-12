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
 * Class PHPEncoder.
 *
 * Encodes and decodes messages in PHP format.
 */
class PHPEncoder implements Encoder
{
    /**
     * Encodes a message to PHP.
     *
     * @param mixed $payload message to decode
     */
    public function encode(mixed $payload): string
    {
        return serialize($payload);
    }

    /**
     * Decodes a message from PHP.
     *
     * @param string $payload message to decode
     */
    public function decode(string $payload): mixed
    {
        return unserialize($payload);
    }
}
