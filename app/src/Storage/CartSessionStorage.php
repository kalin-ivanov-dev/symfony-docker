<?php

namespace App\Storage;

use App\Entity\Cart;
use App\Repository\CartRepository;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Session\SessionInterface;

class CartSessionStorage
{
    private $requestStack;
    private $cartRepository;
    const CART_KEY_NAME = 'cart_id';
    
    public function __construct(RequestStack $requestStack, CartRepository $cartRepository)
    {
        $this->requestStack = $requestStack;
        $this->cartRepository = $cartRepository;
    }

    /**
     * Gets the cart in session.
     *
     * @return Cart|null
     */
    public function getCart(): ?Cart
    {
        return $this->cartRepository->findOneBy([
            'id' => $this->getCartId(),
            'status' => Cart::STATUS_CART
        ]);
    }

    /**
     * Sets the cart in session.
     *
     * @param Cart $cart
     */
    public function setCart(Cart $cart): void
    {
        $this->getSession()->set(self::CART_KEY_NAME, $cart->getId());
    }

    /**
     * Returns the cart id.
     *
     * @return int|null
     */
    private function getCartId(): ?int
    {
        return $this->getSession()->get(self::CART_KEY_NAME);
    }

    private function getSession(): SessionInterface
    {
        return $this->requestStack->getSession();
    }
}