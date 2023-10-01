<?php

namespace App\Entity;

use App\Repository\OrderItemRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderItemRepository::class)]
class OrderItem
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    #[ORM\Column]
    #[Assert\NotBlank]
    #[Assert\GreaterThanOrEqual(1)]
    private int $quantity;

    #[ORM\ManyToOne(inversedBy: 'items')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Cart $orderReference = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function equals(OrderItem $item): bool
    {
        return $this->getProduct()->getId() === $item->getProduct()->getId();
    }
    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): static
    {
        $this->product = $product;

        return $this;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): static
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getOrderReference(): ?Cart
    {
        return $this->orderReference;
    }

    public function setOrderReference(?Cart $orderReference): static
    {
        $this->orderReference = $orderReference;

        return $this;
    }

    public function getTotal(): float
    {
        $totalPrice = 0;
        $totalQnt = $this->getQuantity();
        $productSpecialPrice = $this->getProduct()->getSpecialPrices()->first();
        if($productSpecialPrice !== false && $totalQnt >= $productSpecialPrice->getQuantity()){
            $totalQnt -= $productSpecialPrice->getQuantity();
            $totalPrice += $productSpecialPrice->getPrice() ;
        }
        $totalPrice += $this->getProduct()->getPrice() * $totalQnt;
        return $totalPrice;
    }
}
