<?php

namespace App\Repository;

use App\Entity\VentaCancelada;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VentaCancelada>
 *
 * @method VentaCancelada|null find($id, $lockMode = null, $lockVersion = null)
 * @method VentaCancelada|null findOneBy(array $criteria, array $orderBy = null)
 * @method VentaCancelada[]    findAll()
 * @method VentaCancelada[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaCanceladaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VentaCancelada::class);
    }

    public function save(VentaCancelada $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VentaCancelada $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return VentaCancelada[] Returns an array of VentaCancelada objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('v.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?VentaCancelada
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
