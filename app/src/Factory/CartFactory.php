<?php

namespace App\Factory;

use App\Entity\Cart;
use App\Entity\OrderItem;
use App\Entity\Product;

/**
 * Class CartFactory
 * @package App\Factory
 */
class CartFactory
{
    /**
     * Creates an order.
     *
     * @return Cart
     */
    public function create(): Cart
    {
        $cart = new Cart();
        $cart
            ->setStatus(Cart::STATUS_CART)
            ->setCreatedAt(new \DateTimeImmutable())
            ->setUpdatedAt(new \DateTime());

        return $cart;
    }

    /**
     * Creates an item for a product.
     *
     * @param Product $product
     *
     * @return OrderItem
     */
    public function createItem(Product $product): OrderItem
    {
        $item = new OrderItem();
        $item->setProduct($product);
        $item->setQuantity(1);

        return $item;
    }
}