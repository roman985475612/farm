<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use My\Farm\Animals\Chicken;
use My\Farm\Animals\Cow;
use My\Farm\Cawsheds\Cawshed;
use My\Farm\Warehouses\Warehouse;

try {
    $warehouse = new Warehouse;

    $cawshed = Cawshed::create([
        Chicken::class => 7,
        Cow::class => 15,
    ]);

    $cawshed->collectProducts($warehouse);

    $warehouse->showTotalAmountProducts();
} catch (Throwable $e) {
    print_r($e);
}