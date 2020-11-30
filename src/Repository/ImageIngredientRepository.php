<?php

namespace App\Repository;

use App\Entity\ImageIngredient;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ImageIngredient|null find($id, $lockMode = null, $lockVersion = null)
 * @method ImageIngredient|null findOneBy(array $criteria, array $orderBy = null)
 * @method ImageIngredient[]    findAll()
 * @method ImageIngredient[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ImageIngredientRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ImageIngredient::class);
    }

    // /**
    //  * @return ImageIngredient[] Returns an array of ImageIngredient objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ImageIngredient
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
