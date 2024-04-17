<?php

namespace App\Repository;

use App\Entity\DireccionRecogida;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<DireccionRecogida>
 *
 * @method DireccionRecogida|null find($id, $lockMode = null, $lockVersion = null)
 * @method DireccionRecogida|null findOneBy(array $criteria, array $orderBy = null)
 * @method DireccionRecogida[]    findAll()
 * @method DireccionRecogida[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class DireccionRecogidaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, DireccionRecogida::class);
    }

    public function save(DireccionRecogida $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(DireccionRecogida $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return DireccionRecogida[] Returns an array of DireccionRecogida objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('d.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?DireccionRecogida
//    {
//        return $this->createQueryBuilder('d')
//            ->andWhere('d.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
