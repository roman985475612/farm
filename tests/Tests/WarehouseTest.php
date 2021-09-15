<?php declare(strict_types=1);

namespace Tests;

use My\Farm\Animals\Chicken;
use My\Farm\Animals\Cow;
use My\Farm\Cawsheds\Cawshed;
use My\Farm\Products\Eggs;
use My\Farm\Warehouses\Warehouse;
use PHPUnit\Framework\TestCase;

class WarehouseTest extends TestCase
{
    public function testTotalAmountProducts()
    {
        $warehouse = new Warehouse;

        $cawshed = Cawshed::create([
            Chicken::class => 7,
        ]);

        $cawshed->collectProducts($warehouse);

        $amount = $warehouse->getTotalAmountProducts()[Eggs::class];

        $this->assertGreaterThanOrEqual(0 * 7, $amount);
        $this->assertLessThanOrEqual(1 * 7, $amount);
    }
}