<?php

namespace App\Repository;

use App\Entity\EstadoFondo;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<EstadoFondo>
 *
 * @method EstadoFondo|null find($id, $lockMode = null, $lockVersion = null)
 * @method EstadoFondo|null findOneBy(array $criteria, array $orderBy = null)
 * @method EstadoFondo[]    findAll()
 * @method EstadoFondo[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class EstadoFondoRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, EstadoFondo::class);
    }

    public function save(EstadoFondo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(EstadoFondo $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    /**
     * Devuelve el saldo del ultimo movimiento de este usuario
     *
     * @param $userid
     * @param $moneda
     */
    public function ultimoSaldoMovimiento($userid, $moneda): array
    {
        return $this->createQueryBuilder('s')
            ->select('s.saldo')
            ->join('s.user', 'u')
            ->where('u.id = :user_id')
            ->setParameter('user_id', $userid)
            ->andWhere('s.tipodemoneda = :moneda')
            ->setParameter('moneda', $moneda)
            ->orderBy('s.id', 'DESC')
            ->setMaxResults(1)
            ->getQuery()
            ->getResult();
    }

//    /**
//     * @return EstadoFondo[] Returns an array of EstadoFondo objects
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

//    public function findOneBySomeField($value): ?EstadoFondo
//    {
//        return $this->createQueryBuilder('e')
//            ->andWhere('e.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
