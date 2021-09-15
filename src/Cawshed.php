<?php declare(strict_types=1);

namespace My\Farm;

use Countable;
use Exception;

class Cawshed implements Countable, CawshedInterface
{
    private array $animals = [];

    public static function create(array $amountAnimals): self
    {
        $obj = new self($amountAnimals);
        
        foreach ($obj->amountAnimals as $className => $amount) {
            if ($amount < 1) {
                continue;
            }

            for ($i = 0; $i < $amount; $i++) {
                $animal = new $className;

                if ($animal instanceof AnimalInterface) {
                    $obj->animals[] = $animal;
                }
            }
        }

        return $obj;
    } 

    public function __construct(private array $amountAnimals) {}

    public function addAnimal(AnimalInterface $animal): void
    {
        $this->checkAnimalLimit($animal);
        $this->animals[] = $animal;
    }

    public function count(): int
    {
        return count($this->animals);
    }

    public function collectProducts(WarehouseInterface $warehouse): void
    {
        foreach ($this->animals as $animal) {
            $warehouse->addProduct($animal->getProduct());
        }
    }

    private function checkAnimalLimit(AnimalInterface $animal): void
    {
        $currentCount = $this->getCountAnimalByType($animal);
        
        $limitCount = $this->amountAnimals[$animal::class];

        if ($currentCount >= $limitCount) {
            throw new Exception('Количество ' . $animal->getPluralName() . ' не должно превышать лимит ' . $limitCount);
        }
    }

    private function getCountAnimalByType(AnimalInterface $animal): int
    {
        $count = 0;
        foreach ($this->animals as $item) {
            if ($item->getName() != $animal->getName()) {
                continue;
            }

            $count++;
        }

        return $count;
    }
}