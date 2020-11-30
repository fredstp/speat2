<?php

namespace App\Repository;

use App\Entity\JoursOuverture;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method JoursOuverture|null find($id, $lockMode = null, $lockVersion = null)
 * @method JoursOuverture|null findOneBy(array $criteria, array $orderBy = null)
 * @method JoursOuverture[]    findAll()
 * @method JoursOuverture[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class JoursOuvertureRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, JoursOuverture::class);
    }

    // /**
    //  * @return JoursOuverture[] Returns an array of JoursOuverture objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('j.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?JoursOuverture
    {
        return $this->createQueryBuilder('j')
            ->andWhere('j.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
