<?php

namespace App\Repository;

use App\Entity\RetiroSaldo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<RetiroSaldo>
 *
 * @method RetiroSaldo|null find($id, $lockMode = null, $lockVersion = null)
 * @method RetiroSaldo|null findOneBy(array $criteria, array $orderBy = null)
 * @method RetiroSaldo[]    findAll()
 * @method RetiroSaldo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RetiroSaldoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, RetiroSaldo::class);
    }

    public function save(RetiroSaldo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(RetiroSaldo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return RetiroSaldo[] Returns an array of RetiroSaldo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('r.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?RetiroSaldo
//    {
//        return $this->createQueryBuilder('r')
//            ->andWhere('r.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
