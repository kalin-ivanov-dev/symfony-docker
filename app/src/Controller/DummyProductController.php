<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DummyProductController extends AbstractController
{

    #[Route('/product/new',name: 'new_product')]
    public function new(EntityManagerInterface $entityManager) : Response{
        $categories = ['dairy','frozen','fruit','vegetables','carbohydrates'];
        $skuLetters = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v'];
        $product = new \App\Entity\Product();
        $product->setName('Test');
        $product->setCategory($categories[array_rand($categories)]);
        $product->setSku(strtoupper($skuLetters[array_rand($skuLetters)]));
        $product->setPrice(1200);
        
        $entityManager->persist($product);
        $entityManager->flush($product);

        return new Response(sprintf(
            'Product %d is %d tracks of pure 80\'s heaven',
            $product->getId(),
            $product->getSku()
        ));
    }

    #[Route('/specialPrice/new',name: 'new_special_price')]
    public function newSpecialPrice(EntityManagerInterface $entityManager,ProductRepository $productRepository) : Response{
   
        $product = $productRepository->find(93);

        foreach ($product->getSpecialPrices() as $specialPrice) {
//            $total += $item->getTotal();
            dump($specialPrice->getQuantity());
            dump($specialPrice->getProduct());
        }

        dd($product->getSpecialPrices());
        if(empty($products)){
            return new Response('Please add products to associate with a special price');
        }
        
        $specificPrice = new \App\Entity\SpecialPrice();
        $specificPrice->setPrice(50);
        $specificPrice->setQuantity(2);
//        $specificPrice->setProduct()
        
        
        $entityManager->persist($specificPrice);
        $entityManager->flush($product);

        return new Response(sprintf(
            'Product %d is %d tracks of pure 80\'s heaven',
            $product->getId(),
            $product->getSku()
        ));
    }
}