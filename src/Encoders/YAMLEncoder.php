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
 * Class YAMLEncoder.
 *
 * Encodes and decodes messages in YAML format.
 */
class YAMLEncoder implements Encoder
{
    /**
     * Encodes a message to YAML.
     *
     * @param mixed $payload message to decode
     */
    public function encode(mixed $payload): string
    {
        return yaml_emit($payload);
    }

    /**
     * Decodes a message from YAML.
     *
     * @param string $payload message to decode
     */
    public function decode(string $payload): mixed
    {
        return yaml_parse($payload);
    }
}
