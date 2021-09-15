<?php declare(strict_types=1);

namespace My\Farm;

class Cow extends AbstractAnimal
{
    protected string $name = 'cow';

    protected string $pluralName = 'cows';

    protected int $minCountProduct = 8;
    
    protected int $maxCountProduct = 12;

    public function getProduct(): ProductInterface
    {
        return new Milk(
            amount: rand($this->minCountProduct, $this->maxCountProduct),
            animalId: $this->UID,
        );
    }
}