<?php declare(strict_types=1);

namespace My\Farm;

class Warehouse implements WarehouseInterface
{
    private array $products = [];

    public function addProduct(ProductInterface $product): void
    {
        $this->products[$product->getType()][] = $product;
    }
    
    public function getTotalAmountProducts(): array
    {
        $productTypes = array_keys($this->products);

        $count = [];

        foreach ($productTypes as $type) {
            $count[$type] = 0;
            foreach ($this->products[$type] as $product) {
                $count[$type] += $product->getAmount();
            }
        }

        return $count;
    }

    public function showTotalAmountProducts(): void
    {
        $result = 'Всего собрано: ' . PHP_EOL;

        foreach ($this->getTotalAmountProducts() as $productClassName => $amount) {
            $result .= $productClassName::getName() . ' : ' . $amount . ' ' . $productClassName::getUnit() . PHP_EOL;
        }

        echo $result;
    }
}