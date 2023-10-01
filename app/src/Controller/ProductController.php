<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\AddToCartType;
use App\Manager\CartManager;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RequestStack;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route('/api/products/{id<\d+>}', methods: ['GET'], name: 'api_products_get_one')]
    public function getProduct(int $id, LoggerInterface $logger): Response
    {
        // TODO query the database
        $product = [
            'id' => $id,
            'name' => 'Test Product Name',
            'price' => 15.23,
        ];

        $logger->info('Returning API response for product {product}', [
            'product' => $id,
        ]);

        return $this->json($product);
    }

    #[Route('/product/{slug}', name: 'app_product_show')]
    public function show(Product $product,Request $request,CartManager $cartManager): Response
    {
        $form = $this->createForm(AddToCartType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

        
            $item = $form->getData();
            if($item->getQuantity() <= 0){
                $this->addFlash('error','Cannot add product to cart with negative quantity or zero value');
                return $this->render('product/show.html.twig',[
                    'product' => $product,
                    'form' => $form->createView()
                ]);
            }
           
            $item->setProduct($product);
           
            $cart = $cartManager->getCurrentCart();
            $cart
                ->addItem($item)
                ->setUpdatedAt(new \DateTime());

          
            $cartManager->save($cart);
            return $this->redirectToRoute('app_product_show', ['slug' => $product->getSlug()]);
        }
        
        
        return $this->render('product/show.html.twig',[
            'product' => $product,
            'form' => $form->createView()
        ]);
    }
    
}
