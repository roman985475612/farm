<?php declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use My\Farm\Cawshed;
use My\Farm\Chicken;
use My\Farm\Cow;
use My\Farm\Warehouse;

try {
    $warehouse = new Warehouse;

    $cawshed = Cawshed::create([
        Chicken::class => 7,
        Cow::class => 15,
    ]);

    $cawshed->collectProducts($warehouse);

    print_r($warehouse->getTotalAmountProducts());

    $warehouse->showTotalAmountProducts();

} catch (Throwable $e) {
    print_r($e);
}