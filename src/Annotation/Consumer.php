<?php

declare(strict_types=1);
/**
 * 
 * This file is part of cryjkd.
 *
 * @github   https://github.com/cryjkd
 */

namespace Cryjkd\Nats\Annotation;

use Attribute;
use Hyperf\Di\Annotation\AbstractAnnotation;

#[Attribute(Attribute::TARGET_CLASS)]
class Consumer extends AbstractAnnotation
{
    public function __construct(
        public string $subject = '',
        public string $queue = '',
        public string $name = '',
        public int $nums = 1,
        public string $pool = ''
    ) {
    }
}
