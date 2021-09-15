<?php declare(strict_types=1);

namespace My\Farm\Warehouses;

use My\Farm\Products\ProductInterface;

interface WarehouseInterface
{
    public function addProduct(ProductInterface $product): void;
    
    public function getTotalAmountProducts(): array;

    public function showTotalAmountProducts(): void;
}