<?php declare(strict_types=1);

namespace Tests;

use My\Farm\Animals\Chicken;
use My\Farm\Animals\Cow;
use PHPUnit\Framework\TestCase;

class AnimalTest extends TestCase
{
    public function testGenerateProductByCow()
    {
        $animal = new Cow;

        $product = $animal->getProduct();

        $this->assertGreaterThanOrEqual(8, $product->getAmount());
        $this->assertLessThanOrEqual(12, $product->getAmount());
    }

    public function testGenerateProductByChicken()
    {
        $animal = new Chicken;

        $product = $animal->getProduct();

        $this->assertGreaterThanOrEqual(0, $product->getAmount());
        $this->assertLessThanOrEqual(1, $product->getAmount());
    }
}