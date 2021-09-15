<?php declare(strict_types=1);

namespace My\Farm;

class Eggs extends AbstractProduct
{
    public static function getName(): string
    {
        return 'яйца';
    }

    public static function getUnit(): string
    {
        return 'шт.';
    }
}