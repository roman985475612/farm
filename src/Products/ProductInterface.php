<?php declare(strict_types=1);

namespace My\Farm\Products;

interface ProductInterface
{
    public static function getName(): string;

    public static function getUnit(): string;

    public function getType(): string;

    public function getAmount(): int;

    public function getAnimalId(): string;
}