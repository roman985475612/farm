<?php declare(strict_types=1);

namespace My\Farm;

abstract class AbstractProduct implements ProductInterface
{
    public function __construct(
        private int $amount,
        private string $animalId,    
    ) {}

    public function getType(): string
    {
        return static::class;
    }

    public function getAmount(): int
    {
        return $this->amount;
    }

    public function getAnimalId(): string
    {
        return $this->animalId;
    }
}