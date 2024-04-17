<?php

namespace App\Repository;

use App\Entity\ProductoAmortizacion;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<ProductoAmortizacion>
 *
 * @method ProductoAmortizacion|null find($id, $lockMode = null, $lockVersion = null)
 * @method ProductoAmortizacion|null findOneBy(array $criteria, array $orderBy = null)
 * @method ProductoAmortizacion[]    findAll()
 * @method ProductoAmortizacion[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ProductoAmortizacionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ProductoAmortizacion::class);
    }

    public function save(ProductoAmortizacion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(ProductoAmortizacion $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

//    /**
//     * @return ProductoAmortizacion[] Returns an array of ProductoAmortizacion objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?ProductoAmortizacion
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
