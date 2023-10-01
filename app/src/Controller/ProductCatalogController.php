<?php

namespace App\Controller;

use App\Entity\Product;
use App\Repository\ProductRepository;
use App\Service\MixRepository;
use Doctrine\ORM\EntityManagerInterface;
use Pagerfanta\Doctrine\ORM\QueryAdapter;
use Pagerfanta\Pagerfanta;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use function Symfony\Component\String\u;

class ProductCatalogController extends AbstractController
{

    #[Route('/', name: 'app_homepage')]
    public function homepage(): Response
    {
        return $this->redirectToRoute('app_browse');
    }

    #[Route('/browse/{slug}', name: 'app_browse')]
    public function browse(ProductRepository $productRepository,CacheInterface $cache,Request $request,string $slug = null): Response
    {
        $category = $slug ? u(str_replace('-', ' ', $slug))->title(true) : null;
        
        
        $queryBuilder = $productRepository->createFindByCategoryQueryBuilder($category);
        $adapter = new QueryAdapter($queryBuilder);
        $pagerfanta = Pagerfanta::createForCurrentPageWithMaxPerPage(
            $adapter,
            $request->query->get('page',1),
            6
        );
//        $products = (isset($category)) ? $productRepository->findByCategory($category) : $productRepository->findBy([],['createdAt' => "ASC"]);
        
        return $this->render('browse.html.twig', [
            'category' => $category,
            'pager' => $pagerfanta,
        ]);
    }
}
