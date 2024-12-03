<?php

namespace App\Twig\Components\Product;

use App\Entity\Product;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]
class Card
{
    public string $title;

    public string $description = '';

    public int $id;

    public float $price;

    public string $image;

    public function mount(Product $product): void
    {
        $this->id = $product->getId();
        $this->title = $product->getName();
        $this->description = $product->getDescription();
        $this->price = $product->getPrice();
        $this->image = $product->getImage();
    }
}