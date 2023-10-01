<?php

namespace App\Entity;

use App\Repository\OrderDetailRepository;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: OrderDetailRepository::class)]
class OrderDetail
{
    use TimestampableEntity;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?float $totalValue = null;

    #[ORM\ManyToOne(inversedBy: 'orderDetails')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Order $orderEntry = null;

    #[ORM\ManyToOne]
    #[ORM\JoinColumn(nullable: false)]
    private ?Product $product = null;

    #[ORM\Column]
    private ?int $quantity = null;
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTotalValue(): ?float
    {
        return $this->totalValue;
    }

    public function setTotalValue(float $totalValue): static
    {
        $this->totalValue = $totalValue;

        return $this;
    }

    public function getOrderEntry(): ?Order
    {
        return $this->orderEntry;
    }

    public function setOrderEntry(?Order $orderEntry): static
    {
        $this->orderEntry = $orderEntry;

        return $this;
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

 
}
