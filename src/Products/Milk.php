<?php declare(strict_types=1);

namespace My\Farm\Products;

class Milk extends AbstractProduct
{
    public static function getName(): string
    {
        return 'молоко';
    }

    public static function getUnit(): string
    {
        return 'л.';
    }
}