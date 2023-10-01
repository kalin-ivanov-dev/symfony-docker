<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\Product1Type;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/product/administration')]
class ProductAdministrationController extends AbstractController
{
    #[Route('/', name: 'app_product_administration_index', methods: ['GET'])]
    public function index(ProductRepository $productRepository): Response
    {
        return $this->render('product_administration/index.html.twig', [
            'products' => $productRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_product_administration_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $product = new Product();
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);
        
        if ($form->isSubmitted() && $form->isValid()) {
            if($productRepository->findOneBy(['sku' => $product->getSku()])){
                $this->addFlash('error','Product with the given SKU already exists.Please change it');

                return $this->renderForm('product_administration/new.html.twig', [
                    'product' => $product,
                    'form' => $form,
                ]);
            }
           
            $entityManager->persist($product);
            $entityManager->flush();

            $this->addFlash('success','Product successfully created');
            return $this->redirectToRoute('app_product_administration_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_administration/new.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_administration_show', methods: ['GET'])]
    public function show(Product $product): Response
    {
        return $this->render('product_administration/show.html.twig', [
            'product' => $product,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_product_administration_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Product $product, EntityManagerInterface $entityManager,ProductRepository $productRepository): Response
    {
        $form = $this->createForm(Product1Type::class, $product);
        $form->handleRequest($request);

       
        
        if ($form->isSubmitted() && $form->isValid()) {
            $checkExistsProd = $productRepository->findOneBy(['sku' => $product->getSku()]);
           
            if(isset($checkExistsProd) && $checkExistsProd->getId() != $product->getId()){
                $this->addFlash('error','Product with the given SKU already exists.Please change it');

                return $this->renderForm('product_administration/new.html.twig', [
                    'product' => $product,
                    'form' => $form,
                ]);
            }

            $this->addFlash('success','Product successfully updated');

            $entityManager->flush();
            return $this->redirectToRoute('app_product_administration_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('product_administration/edit.html.twig', [
            'product' => $product,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_product_administration_delete', methods: ['POST'])]
    public function delete(Request $request, Product $product, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$product->getId(), $request->request->get('_token'))) {
            $entityManager->remove($product);
            $entityManager->flush();
        }

        $this->addFlash('success','Product successfully deleted');
        return $this->redirectToRoute('app_product_administration_index', [], Response::HTTP_SEE_OTHER);
    }
}
