<?php

declare(strict_types=1);
/**
 * 
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats;

class RandomGenerator
{
    /**
     * A simple wrapper on random_bytes.
     *
     * @param int $len length of the string
     *
     * @return string random string
     */
    public function generateString($len): string
    {
        return bin2hex(random_bytes($len));
    }
}
