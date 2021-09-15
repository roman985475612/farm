<?php declare(strict_types=1);

namespace My\Farm;

interface CawshedInterface
{
    public function addAnimal(AnimalInterface $animal): void;

    public function collectProducts(WarehouseInterface $warehouse): void;
}