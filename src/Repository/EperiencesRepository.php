<?php

namespace App\Repository;

use App\Entity\Eperiences;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Eperiences>
 *
 * @method Eperiences|null find($id, $lockMode = null, $lockVersion = null)
 * @method Eperiences|null findOneBy(array $criteria, array $orderBy = null)
 * @method Eperiences[]    findAll()
 * @method Eperiences[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EperiencesRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Eperiences::class);
    }

//    /**
//     * @return Eperiences[] Returns an array of Eperiences objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('e.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Eperiences
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
