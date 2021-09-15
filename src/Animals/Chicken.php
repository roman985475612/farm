<?php declare(strict_types=1);

namespace My\Farm\Animals;

use My\Farm\Products\Eggs;
use My\Farm\Products\ProductInterface;

class Chicken extends AbstractAnimal
{
    protected string $name = 'chicken';

    protected string $pluralName = 'chickens';

    protected int $minCountProduct = 0;
    
    protected int $maxCountProduct = 1;

    public function getProduct(): ProductInterface
    {
        return new Eggs(
            amount: rand($this->minCountProduct, $this->maxCountProduct),
            animalId: $this->UID,
        );
    }
}