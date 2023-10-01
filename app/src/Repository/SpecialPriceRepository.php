<?php

namespace App\Repository;

use App\Entity\SpecialPrice;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\QueryBuilder;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<SpecialPrice>
 *
 * @method SpecialPrice|null find($id, $lockMode = null, $lockVersion = null)
 * @method SpecialPrice|null findOneBy(array $criteria, array $orderBy = null)
 * @method SpecialPrice[]    findAll()
 * @method SpecialPrice[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SpecialPriceRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SpecialPrice::class);
    }
    

//    public function findOneBySomeField($value): ?SpecialPrice
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
