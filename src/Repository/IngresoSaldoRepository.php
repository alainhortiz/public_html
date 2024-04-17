<?php

namespace App\Repository;

use App\Entity\IngresoSaldo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<IngresoSaldo>
 *
 * @method IngresoSaldo|null find($id, $lockMode = null, $lockVersion = null)
 * @method IngresoSaldo|null findOneBy(array $criteria, array $orderBy = null)
 * @method IngresoSaldo[]    findAll()
 * @method IngresoSaldo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class IngresoSaldoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, IngresoSaldo::class);
    }

    public function save(IngresoSaldo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(IngresoSaldo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return IngresoSaldo[] Returns an array of IngresoSaldo objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('i.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?IngresoSaldo
//    {
//        return $this->createQueryBuilder('i')
//            ->andWhere('i.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
