<?php

class Product
{
    private string $title;
    private float $price;
    private array $components;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function setComponents(array $components): void
    {
        $this->components = $components;
        $this->sumComponentsPrice();
    }

    private function sumComponentsPrice(): void
    {
        $this->price = 0;
        foreach ( $this->components as $component ) {
            $this->price += $component->price;
        }
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getComponents(): array
    {
        return $this->components;
    }

}