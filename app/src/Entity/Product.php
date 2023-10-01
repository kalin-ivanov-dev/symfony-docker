<?php

namespace App\Entity;

use App\Repository\ProductRepository;
use Cassandra\Date;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation\Slug;
use Gedmo\Timestampable\Traits\TimestampableEntity;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
///**
// * @Entity
// * @Table(uniqueConstraints={@UniqueConstraint(name="search_idx", fields={"sku"})})
// */
class Product
{
    use TimestampableEntity;
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;
    
    #[ORM\Column(length: 1,unique: true)]
    private ?string $sku = null;
    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column]
    private ?int $price = null;
    #[ORM\Column(length: 50)]
    private ?string $category = null;

    #[ORM\Column(length: 100,unique: true)]
    #[Slug(fields: ['name'])]
    private ?string $slug = null;

    #[ORM\OneToMany(mappedBy: 'product', targetEntity: SpecialPrice::class)]
    private Collection $specialPrices;
    
    
    public function  __construct()
    {
        $this->specialPrices = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): static
    {
        $this->price = $price;

        return $this;
    }
    

    public function getImageUrl(int $width): string
    {
        return sprintf(
            'https://picsum.photos/id/%d/%d',
            ($this->getId() + 50) % 1000, // number between 0 and 1000, based on the id
            $width
        );
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): static
    {
        $this->category = $category;

        return $this;
    }

    public function getSku(): ?string
    {
        return $this->sku;
    }

    public function setSku(string $sku): static
    {
        $this->sku = $sku;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): static
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * @return Collection<int, SpecialPrice>
     */
    public function getSpecialPrices(): Collection
    {
        return $this->specialPrices;
    }

    public function addSpecialPrice(SpecialPrice $specialPrice): static
    {
        if (!$this->specialPrices->contains($specialPrice)) {
            $this->specialPrices->add($specialPrice);
            $specialPrice->setProduct($this);
        }

        return $this;
    }

    public function removeSpecialPrice(SpecialPrice $specialPrice): static
    {
        if ($this->specialPrices->removeElement($specialPrice)) {
            // set the owning side to null (unless already changed)
            if ($specialPrice->getProduct() === $this) {
                $specialPrice->setProduct(null);
            }
        }

        return $this;
    }
}
