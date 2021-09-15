<?php declare(strict_types=1);

namespace Tests;

use Exception;
use My\Farm\Animals\Chicken;
use My\Farm\Animals\Cow;
use My\Farm\Cawsheds\Cawshed;
use PHPUnit\Framework\TestCase;

class CawshedTest extends TestCase
{
    public function testAnimalCountCreateMethod()
    {
        $cawshed = Cawshed::create([
            Chicken::class => 1,
            Cow::class => 1,
        ]);

        $this->assertSame(2, count($cawshed));
    }

    public function testAnimalCountZero()
    {
        $cawshed = new Cawshed([
            Chicken::class => 1,
            Cow::class => 1,
        ]);

        $this->assertSame(0, count($cawshed));

        return $cawshed;
    }

    /**
     * @depends testAnimalCountZero
     */
    public function testAnimalCountNormal(Cawshed $cawshed)
    {
        $cawshed->addAnimal(new Cow);
        $cawshed->addAnimal(new Chicken);

        $this->assertSame(2, count($cawshed));

        return $cawshed;
    }

    /**
     * @depends testAnimalCountNormal
     */
    public function testAnimalCountException(Cawshed $cawshed)
    {
        $this->expectException(Exception::class);
        $cawshed->addAnimal(new Cow);
    }
}