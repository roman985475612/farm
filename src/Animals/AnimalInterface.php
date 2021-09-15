<?php declare(strict_types=1);

namespace My\Farm\Animals;

use My\Farm\Products\ProductInterface;

interface AnimalInterface
{
    public function getId(): string;
    
    public function getName(): string;

    public function getPluralName(): string;

    public function getProduct(): ProductInterface;
}