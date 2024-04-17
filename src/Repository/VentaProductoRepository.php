<?php

namespace App\Repository;

use App\Entity\VentaProducto;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<VentaProducto>
 *
 * @method VentaProducto|null find($id, $lockMode = null, $lockVersion = null)
 * @method VentaProducto|null findOneBy(array $criteria, array $orderBy = null)
 * @method VentaProducto[]    findAll()
 * @method VentaProducto[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class VentaProductoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, VentaProducto::class);
    }

    public function add(VentaProducto $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(VentaProducto $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Devuelve los productos de una venta del usuario
     *
     * @param int $userid
     * @return array
     */
    public function ventasUsuarios(int $userid): array
    {
        return $this->createQueryBuilder('v')
            ->join('v.producto', 'p')
            ->join('p.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->getQuery()
            ->getResult();
    }

    /**
     * Devuelve los saldos de los usuarios por tipo de producto
     *
     * @return array
     */
    public function saldosUsuarios(): array
    {
        return $this->createQueryBuilder('v')
            ->select('u.id, u.nombre, p.tipoProducto, p.tipodemoneda, SUM(v.royaltie) as acumulado')
            ->join('v.producto', 'p')
            ->join('p.user', 'u')
            ->groupBy('u.id, u.nombre, p.tipoProducto, p.tipodemoneda')
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return VentaProducto[] Returns an array of VentaProducto objects
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

//    public function findOneBySomeField($value): ?VentaProducto
//    {
//        return $this->createQueryBuilder('v')
//            ->andWhere('v.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
