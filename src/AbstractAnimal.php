<?php declare(strict_types=1);

namespace My\Farm;

use Stringable;

abstract class AbstractAnimal implements AnimalInterface, Stringable
{
    protected string $UID;

    protected string $name;

    protected string $pluralName;

    protected int $minCountProduct;
    
    protected int $maxCountProduct;

    public function __construct()
    {
        $this->UID = uniqid();
    }

    public function __toString()
    {
        return 'Animal : ' . $this->name . ' # ' . $this->UID;
    }

    public function getId(): string
    {
        return $this->UID;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPluralName(): string
    {
        return $this->pluralName;
    }
}