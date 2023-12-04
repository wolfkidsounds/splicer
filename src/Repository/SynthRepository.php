<?php

namespace App\Repository;

use App\Entity\Synth;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Synth>
 *
 * @method Synth|null find($id, $lockMode = null, $lockVersion = null)
 * @method Synth|null findOneBy(array $criteria, array $orderBy = null)
 * @method Synth[]    findAll()
 * @method Synth[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SynthRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Synth::class);
    }

//    /**
//     * @return Synth[] Returns an array of Synth objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('s.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Synth
//    {
//        return $this->createQueryBuilder('s')
//            ->andWhere('s.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
