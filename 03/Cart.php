<?php

class Cart
{
    private array $products;
    private float $sumPrice;

    public function __construct()
    {
        $this->products = [];
        $this->sumPrice = 0;
    }

    public function addCart(Product $product)
    {
        if ( !array_key_exists($product->getTitle(), $this->products) ) {
            $this->products[$product->getTitle()] = [$product, 1];
        } else {
            $this->products[$product->getTitle()][1]++;
        }
    }

    public function removeCart(Product $product)
    {
        if (array_key_exists($product->getTitle(), $this->products)) {
            if ($this->products[$product->getTitle()][1] > 1) {
                $this->products[$product->getTitle()][1]--;
            } else {
                unset($this->products[$product->getTitle()]);
            }
        }
    }

    private function calculateSumPrice()
    {
        foreach ( $this->products as $product ) {
            $this->sumPrice += $product[0]->getPrice() * $product[1];
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getSumPrice(): float
    {
        $this->calculateSumPrice();
        return $this->sumPrice;
    }

}