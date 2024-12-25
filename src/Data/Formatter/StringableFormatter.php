<?php

declare(strict_types=1);

namespace VUdaltsov\Yii3DataExperiment\Data\Formatter;

use VUdaltsov\Yii3DataExperiment\Data\Formatter;

/**
 * @api
 */
final readonly class StringableFormatter implements Formatter
{
    public function format(mixed $value): ?string
    {
        if ($value instanceof \Stringable) {
            return (string) $value;
        }

        return null;
    }
}