<?php

namespace App\Repository;

use App\Entity\Venta;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Venta>
 *
 * @method Venta|null find($id, $lockMode = null, $lockVersion = null)
 * @method Venta|null findOneBy(array $criteria, array $orderBy = null)
 * @method Venta[]    findAll()
 * @method Venta[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Venta::class);
    }

    public function add(Venta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(Venta $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Devuelve los ultimos 5 registros de venta
     *
     * @return array
     */
    public function ultimos5registros(): array
    {
        return $this->createQueryBuilder('u')
            ->orderBy('u.id', 'DESC')
            ->getQuery()
            ->setMaxResults(5)
            ->getResult();
    }

    /**
     * Devuelve las ventas de productos dado el usuario
     *
     * @param int $userid
     * @return array
     */
    public function obtenerlasventasdadouserp(int $userid): array
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->join('u.ventas', 'vp')
            ->join('vp.producto', 'p')
            ->join('p.user', 'us')
            ->where('p.tipoProducto in (1,2)')
            ->andWhere('us.id = :user_id')
            ->setParameter('user_id', $userid)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve las ventas de todos los productos
     *
     * @return array
     */
    public function obtenerlasventasproductos(): array
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->join('u.ventas', 'vp')
            ->join('vp.producto', 'p')
            ->join('p.user', 'us')
            ->where('p.tipoProducto in (1,2)')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve las ventas de servicios dado el usuario
     *
     * @param int $userid
     * @return array
     */
    public function obtenerlasventasdadousers(int $userid): array
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->join('u.ventas', 'vp')
            ->join('vp.producto', 'p')
            ->join('p.user', 'us')
            ->where('p.tipoProducto = 3')
            ->andWhere('us.id = :user_id')
            ->setParameter('user_id', $userid)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve las ventas de todos los servicios
     *
     * @return array
     */
    public function obtenerlasventasservicios(): array
    {
        return $this->createQueryBuilder('u')
            ->select('u')
            ->join('u.ventas', 'vp')
            ->join('vp.producto', 'p')
            ->where('p.tipoProducto = 3')
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve el total de ventas
     *
     * @return int
     */
    public function totalventas(): int
    {
        return count($this->createQueryBuilder('u')
            ->select('u')
            ->getQuery()->getResult()
        );
    }

//    /**
//     * @return Venta[] Returns an array of Venta objects
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

//    public function findOneBySomeField($value): ?Venta
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
