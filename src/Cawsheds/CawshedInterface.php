<?php declare(strict_types=1);

namespace My\Farm\Cawsheds;

use My\Farm\Animals\AnimalInterface;
use My\Farm\Warehouses\WarehouseInterface;

interface CawshedInterface
{
    public function addAnimal(AnimalInterface $animal): void;

    public function collectProducts(WarehouseInterface $warehouse): void;
}