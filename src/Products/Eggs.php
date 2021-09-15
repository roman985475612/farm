<?php declare(strict_types=1);

namespace My\Farm\Products;

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