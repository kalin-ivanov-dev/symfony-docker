<?php

namespace App\Controller;

use App\Entity\Order;
use App\Entity\OrderDetail;
use App\Form\CartType;
use App\Manager\CartManager;
use App\Repository\CartRepository;
use App\Repository\OrderRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CartController extends AbstractController
{
    #[Route('/cart', name: 'cart')]
    public function index(CartManager $cartManager,Request $request): Response
    {
        $cart = $cartManager->getCurrentCart();
        $form = $this->createForm(CartType::class, $cart);
        $form->handleRequest($request);
       
        if ($form->isSubmitted() && $form->isValid()) {
            $cart->setUpdatedAt(new \DateTime());
            $cartManager->save($cart);

            return $this->redirectToRoute('cart');
        }
        
        return $this->render('cart/index.html.twig', [
            'cart' => $cart,
            'form' => $form->createView()
        ]);
    }

    #[Route('/checkout/{cartId}', name: 'checkout')]
    public function checkout(int $cartId,CartManager $cartManager,EntityManagerInterface $entityManager,OrderRepository $orderRepository): Response
    {
        $existingOrder = $orderRepository->findByCartId($cartId);
        if(isset($existingOrder)){
            return $this->redirectToRoute('app_browse');
//            $cart = $cartrepository->find($existingOrder->getCartEntry());
            $orderDetails = $existingOrder->getOrderDetails();
            $items = [];
            foreach ($orderDetails as $key=>$orderDetail){
                $items[$key] = $orderDetail->getProduct();
                $items[$key]->setPrice($orderDetail->getTotalValue()) ;
                $items[$key]->quantity = $orderDetail->getQuantity();
            }
         
            return $this->render('cart/checkout.html.twig', [
                'items' => $items,
                'order' => $existingOrder,
                'existingOrder' => true
            ]);
            
        }

        $cart = $cartManager->getCurrentCart();
        if(empty($cart->getItems()->toArray())) return $this->redirectToRoute('app_browse');
        
        //Create Order
        $order  = new Order();
        $order->setTotalValue($cart->getTotal());
        $order->setCartEntry($cart);
        $entityManager->persist($order);
        $entityManager->flush();
        
        //Create order details and associate to order
        $items = [];
        foreach ($cart->getItems() as $key=>$cartItem){
            $orderDetail = new OrderDetail();
            $orderDetail->setProduct($cartItem->getProduct());
            $orderDetail->setTotalValue($cartItem->getTotal());
            $orderDetail->setQuantity($cartItem->getQuantity());
            $orderDetail->setOrderEntry($order);

            $entityManager->persist($orderDetail);
            $entityManager->flush();

            $items[$key] = $orderDetail->getProduct();
            $items[$key]->setPrice($orderDetail->getTotalValue()) ;
            $items[$key]->quantity = $orderDetail->getQuantity();
        }
        
        $cart->setStatus('order');
        $cartManager->save($cart);
        
        return $this->render('cart/checkout.html.twig', [
            'items' => $items,
            'order' => $order,
            'existingOrder' => false
        ]);
    }
    
}
